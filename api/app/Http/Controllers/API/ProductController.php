<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Product;
use Validator;
use DB;

class ProductController extends BaseController {

  public function index(Request $request) {
    $input = $request->all();

    if(isset($input['category_id'])) {
      $category_id = $input['category_id'];
      $products = Product::where('category_id', $category_id)
      ->join('categories', 'products.category_id', '=', 'categories.id')
      ->select('products.*', 'categories.name as category')->get();      
    }
    else {
      $products = DB::table('products')->join('categories', 'products.category_id', '=', 'categories.id')
      ->select('products.*', 'categories.name as category')->get();
    }

    return $this->sendSuccess($products->toArray(), 'Products retrieved successfully.');
  }

  public function findProducts(Request $request) {
    $input = $request->all();

    $pageNumber = $input['pageNumber'];
    $pageSize = $input['pageSize']; 
    $pageSkip = $pageNumber * $pageSize;

    if(isset($input['category_id'])) {
      $category_id = $input['category_id'];
      $products = Product::where('category_id', $category_id)->join('categories', 'products.category_id', '=', 'categories.id')
      ->select('products.*', 'categories.name as category')->offset($pageSkip)->limit($pageSize)->get();
      $count = Product::where('category_id', $category_id)->count();
    }
    else {
      // $products = DB::select('select * from products limit ?, ?', [$pageSkip, $pageSize]);
      // $count = DB::table('products')->count();
      $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
      ->select('products.*', 'categories.name as category')->offset($pageSkip)->limit($pageSize)->get();
      $count = Product::all()->count();      
    }

    $data = array(
      'items' => $products,
      'totalCount' => $count
    );

    return $this->sendSuccess($data, 'Products retrieved successfully.');
  }

  public function show($id) {
    $product = Product::find($id);

    if (is_null($product)) {
      return $this->sendError('User not found.');
    }

    return $this->sendSuccess($product, '');
  }

  public function store(Request $request) {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'description' => 'required',
      'price' => 'required',
      'category_id' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $product = Product::create($input);

    return $this->sendSuccess($product, 'Product created successfully.');
  }

  public function update(Request $request, $id) {
    $input = $request->all();
    $product = Product::find($id);
    $product->update($input);

    return $this->sendSuccess($product, 'Product updated successfully');
  }

  public function destroy($id) {
    $product = Product::find($id);
    $product->delete();

    return $this->sendSuccess('', 'Product deleted successfully');
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

      $image->move(public_path('images/products'), $imageName);

      $imgUrl = 'products/download/'.$id;
      Product::where('id', $id)->update([
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
    $product = Product::find($id);

    if (is_null($product)) {
      return $this->sendError('Product not found.');
    }

    $filename = $product->file_name;
    $file = public_path('images/products/').$filename;
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
