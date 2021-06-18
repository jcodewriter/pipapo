<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use DateTime;

class BaseController extends Controller
{
  /**
   * success response method.
   *
   * @return \Illuminate\Http\Response
   */
  public function sendSuccess($result, $message)
  {
    $response = [
      'success' => true,
      'data'    => $result,
      'message' => $message,
    ];

    return response()->json($response, 200);
  }

  public function sendFailed($message, $failedMessages = [])
  {
    $response = [
      'success' => false,
      'message' => $message
    ];

    if (!empty($failedMessages)) {
      $response['data'] = $failedMessages;
    }

    return response()->json($response, 200);
  }

  /**
   * return error response.
   *
   * @return \Illuminate\Http\Response
   */
  public function sendError($error, $errorMessages = [], $code = 404)
  {
    $response = [
      'success' => false,
      'message' => $error,
    ];

    if (!empty($errorMessages)) {
      $response['data'] = $errorMessages;
    }

    return response()->json($response, $code);
  }

  public function getIp()
  {
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
      if (array_key_exists($key, $_SERVER) === true) {
        foreach (explode(',', $_SERVER[$key]) as $ip) {
          $ip = trim($ip); // just to be safe
          if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
            return $ip;
          }
        }
      }
    }
  }

  function get_now()
  {
    // date_default_timezone_set('Asia/Hong_Kong');

    $date = new DateTime();
    $timestamp = $date->getTimestamp();

    return $timestamp;
  }
}
