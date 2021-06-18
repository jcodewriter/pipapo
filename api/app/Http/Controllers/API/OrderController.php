<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Order;
use Validator;

class OrderController extends BaseController {

  public function index() {
    $orders = Order::all();
    return $this->sendSuccess($orders->toArray(), 'Orders retrieved successfully.');
  }

  public function findOrders(Request $request) {
    $input = $request->all();

    $pageNumber = $input['pageNumber'];
    $pageSize = $input['pageSize']; 
    $pageSkip = $pageNumber * $pageSize;

    $orders = Order::offset($pageSkip)->limit($pageSize)->get();
    $count = Order::all()->count();

    $data = array(
      'items' => $orders,
      'totalCount' => $count
    );

    return $this->sendSuccess($data, 'Products retrieved successfully.');
  }

  public function show($id) {
    $order = Order::find($id);

    if (is_null($order)) {
      return $this->sendError('Order not found.');
    }

    return $this->sendSuccess($order, '');
  }

  public function store(Request $request) {
    $validator = Validator::make($request->all(), [
      'customer_id' => 'required',
      'paymethod' => 'required',
      'transaction_id' => 'required',
      'products' => 'required',
      'customer' => 'required',
      'total_price' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();
    $order = Order::create($input);

    return $this->sendSuccess($order, 'Order created successfully.');
  }

  public function update(Request $request, $id) {
    $input = $request->all();
    $order = Order::find($id);
    $order->update($input);

    return $this->sendSuccess($order, 'User updated successfully');
  }

  public function destroy($id) {
    $order = User::find($id);
    $order->delete();

    return $this->sendSuccess('', 'User deleted successfully');
  }
}
