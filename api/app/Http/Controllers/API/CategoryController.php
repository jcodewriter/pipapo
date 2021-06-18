<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Category;
use Validator;
use DB;

class CategoryController extends BaseController {
  public function index() {
    $categories = Category::all();
    return $this->sendSuccess($categories->toArray(), 'Categories retrieved successfully.');
  }

  public function findCategories(Request $request) {
    $input = $request->all();

    // $sortField = $input['sortField'];
    // $sortOrder = $input['sortOrder'];
    $pageNumber = $input['pageNumber'];
    $pageSize = $input['pageSize']; 
    $pageSkip = $pageNumber * $pageSize;

    $categories = DB::select('select * from categories limit ?, ?', [$pageSkip, $pageSize]);
    $count = DB::table('categories')->count();

    $data = array(
      'items' => $categories,
      'totalCount' => $count
    );

    return $this->sendSuccess($data, 'Categories retrieved successfully.');
  }

  public function show($id) {
    $category = Category::find($id);

    if (is_null($category)) {
      return $this->sendError('Category not found.');
    }

    return $this->sendSuccess($category, '');
  }

  public function store(Request $request) {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $category = Category::create($input);

    return $this->sendSuccess($category, 'Category created successfully.');
  }

  public function update(Request $request, $id) {
    $input = $request->all();
    $category = Category::find($id);
    $category->update($input);

    return $this->sendSuccess($category, 'Category updated successfully');
  }

  public function destroy($id) {
    $category = Category::find($id);
    $category->delete();

    return $this->sendSuccess('', 'Category deleted successfully');
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
      $imageName = $id.'.'.$image->getClientOriginalExtension();

      $image->move(public_path('images/categories'), $imageName);

      $imgUrl = 'categories/download/'.$id;
      Category::where('id', $id)->update([
        'file_name' => $imageName,
        'image' => $imgUrl
      ]);

      $data = array(
        'file_name' => $imageName,
        'path' => $imgUrl
      );

      return $this->sendSuccess($data, "Uploading succeeed.");
    }
    else {
      return $this->sendError('File doesn\'t exist');
    }
  }

  public function download($id) {
    $category = Category::find($id);

    if (is_null($category)) {
      return $this->sendError('Product not found.');
    }

    $filename = $category->file_name;
    $file = public_path('images/categories/').$filename;
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
