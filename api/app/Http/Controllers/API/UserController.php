<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends BaseController
{
  /**
   * Register api
   *
   * @return \Illuminate\Http\Response
   */
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'first_name' => 'required',
      'surname' => 'required',
      'email' => 'required|email',
      'password' => 'required',
      'c_password' => 'required|same:password'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();
    $input['password'] = bcrypt($input['password']);

    $oldUser = User::where('email', $input['email'])->first();
    if (!is_null($oldUser)) {
      return $this->sendFailed('The user aleady exist.', $oldUser);
    }
    $user = User::create($input);

    $user['token_type'] = 'Bearer';
    $user['access_token'] =  $user->createToken('Pipapo')->accessToken;

    return $this->sendSuccess($user, 'User registered successfully.');
  }

  public function index()
  {
    $users = User::all();
    return $this->sendSuccess($users->toArray(), 'Users retrieved successfully.');
  }

  public function show($id)
  {
    $user = User::find($id);

    if (is_null($user)) {
      return $this->sendError('User not found.');
    }

    return $this->sendSuccess($user, '');
  }

  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required',
      'phone' => 'required',
      'c_password' => 'required|same:password',
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $input['ip_address'] = request()->ip();

    $user = User::create($input);

    $user['token_type'] = 'Bearer';
    $user['access_token'] =  $user->createToken('Pipapo')->accessToken;

    return $this->sendSuccess($user, 'User created successfully.');
  }

  public function update(Request $request, $id)
  {
    $input = $request->all();
    $user = User::find($id);
    if($input['password']) {
      $input['password'] = bcrypt($input['password']);
    }
    $user->update($input);

    return $this->sendSuccess($user, 'User updated successfully');
  }

  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();

    return $this->sendSuccess('', 'User deleted successfully');
  }

  public function updateDeviceToken(Request $request)
  {
    $input = $request->all();
    $userId = $input['user_id'];
    $deviceToken = $input['device_token'];

    $user = User::find($userId);

    if (is_null($user)) {
      return $this->sendFailed("Account dosen't exist.");
    }

    $user->device_token = $deviceToken;
    $user->save();

    return $this->sendSuccess('', 'Device token updated successfully');
  }
}
