<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class NotificationController extends BaseController {

  public function sendNotification(Request $request) {

    $validator = Validator::make($request->all(), [
      'user_id' => 'required',
      'notify_type' => 'required',
      'title' => 'required',
      'message' => 'required',
      'token' => 'required',
      'ahead' => 'required',
      'counter' => 'required'
    ]);

    if($validator->fails()){
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $userId = $input['user_id'];
    $notifyType = $input['notify_type'];
    $title = $input['title'];
    $message = $input['message'];
    $token = $input['token'];
    $ahead = $input['ahead'];
    $counter = $input['counter'];

    $user = User::find($userId);

    if(is_null($user)) {
      return $this->sendFailed("Account dosen't exist.");
    }

    if($user->device_token != '') {
      $deviceTokens[] = $user->device_token;

      $notification = array();
      $notification['title'] = $title;
      $notification['body'] = $message;

      $data = array();
      $data['notify_type'] = $notifyType;
      $data['token'] = $token;
      $data['ahead'] = $ahead;
      $data['counter'] = $counter;

      $fields = array(
        'registration_ids' => $deviceTokens,
        'notification' => $notification,
        'data' => $data
      );

      $res = $this->sendPushNotification($fields);
    }

    return $this->sendSuccess($res, 'Sent successfully');
  }

  private function sendPushNotification($fields) {

    //firebase server url to send the curl request
    $url = 'https://fcm.googleapis.com/fcm/send';

    //building headers for the request
    $headers = array(
      'Authorization: key=' . env('FCM_SERVER_KEY', ''),
      'Content-Type: application/json'
    );

    //Initializing curl to open a connection
    $ch = curl_init();

    //Setting the curl url
    curl_setopt($ch, CURLOPT_URL, $url);

    //setting the method as post
    curl_setopt($ch, CURLOPT_POST, true);

    //adding headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //disabling ssl support
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    //adding the fields in json format
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

    //finally executing the curl request
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }

    //Now close the connection
    curl_close($ch);

    //and return the result
    return $result;
  }
}