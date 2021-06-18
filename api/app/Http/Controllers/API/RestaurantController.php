<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Restaurant;
use Validator;

class RestaurantController extends BaseController {
  public function index() {
    $restaurant = Restaurant::all();
    return $this->sendSuccess($restaurant->toArray(), 'Restaurants retrieved successfully.');
  }

  public function show($id) {
    $restaurant = Restaurant::find($id);

    if (is_null($restaurant)) {
      return $this->sendError('Restaurant not found.');
    }

    return $this->sendSuccess($restaurant, '');
  }

  public function getRestaurant(Request $request) {
    $restaurant = Restaurant::all();
    if(count($restaurant->toArray()) > 0) {
      return $this->sendSuccess($restaurant->toArray()[0], 'Restaurants retrieved successfully.');
    }
    return $this->sendSuccess([], 'Restaurants retrieved successfully.');
  }

  public function store(Request $request) {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email',
      'address' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $restaurant = Restaurant::create($input);

    return $this->sendSuccess($restaurant, 'Restaurant created successfully.');
  }

  public function update(Request $request, $id) {
    $input = $request->all();
    
    $restaurant = Restaurant::find($id);
    $restaurant->update($input);

    return $this->sendSuccess($restaurant, 'Restaurant updated successfully');
  }

  public function destroy($id) {
    $restaurant = Restaurant::find($id);
    $restaurant->delete();

    return $this->sendSuccess('', 'Restaurant deleted successfully');
  }

  public function download($id) {
    $restaurant = Restaurant::find($id);

    if (is_null($restaurant)) {
      return $this->sendError('Restaurant not found.');
    }

    $filename = $restaurant->file_name;
    $file = public_path('images/restaurants/').$filename;
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