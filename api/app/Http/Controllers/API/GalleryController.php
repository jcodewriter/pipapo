<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Picture;
use Validator;

class GalleryController extends BaseController {
  public function index() {
    $pictures = Picture::all();
    return $this->sendSuccess($pictures->toArray(), 'Pictures retrieved successfully.');
  }

  public function show($id) {
    $picture = Picture::find($id);

    if (is_null($picture)) {
      return $this->sendError('Picture not found.');
    }

    return $this->sendSuccess($picture, '');
  }

  public function store(Request $request) {
    $validator = Validator::make($request->all(), []);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $picture = Picture::create($input);
    $picture = Picture::latest()->first();

    return $this->sendSuccess($picture, 'Picture created successfully.');
  }

  public function update(Request $request, $id) {
    $input = $request->all();
    $picture = Picture::find($id);
    $picture->update($input);

    return $this->sendSuccess($picture, 'Picture updated successfully');
  }

  public function destroy($id) {
    $picture = Picture::find($id);
    $filePath = public_path('images/gallery').$picture->filename;
    if(is_file($filePath)) {
      unlink($filePath);
    }
    $picture->delete();

    return $this->sendSuccess('', 'Picture deleted successfully');
  }

  public function upload(Request $request, $id) {

    // Form validation
    $request->validate([
      // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
    ]);

    // Check if a profile image has been uploaded
    if ($request->has('image')) {
      // Get image file
      $image = $request->file('image');
      // $imageName = time().'.'.request()->image->getClientOriginalExtension();
      $imageName = $id.'.'.$image->getClientOriginalExtension();

      $image->move(public_path('images/gallery'), $imageName);

      $data = array(
        'file_name' => $imageName,
        'path' => 'gallery/download/'.$id
      );

      return $this->sendSuccess($data, "Uploading succeeed.");
    }
    else {
      return $this->sendError('File doesn\'t exist');
    }
  }

  public function download(Request $request, $id) {
    $picture = Picture::find($id);

    if (is_null($picture)) {
      return $this->sendError('Picture not found.');
    }

    $filename = $picture->filename;
    $file = public_path('images/gallery/').$filename;
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if($ext == 'png' || 'PNG'){
      $headers = array(
        'Content-Type' => 'image/png',
      );
    }
    else if($ext == 'jpg' || 'jpeg' || 'JPEG' || 'JPG'){
      $headers = array(
        'Content-Type' => 'image/jpeg',
      );
    }

    return response()->download($file, $filename, $headers);
  }
}
