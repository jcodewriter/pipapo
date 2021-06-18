<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use App\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use Mail;
use Twilio\Rest\Client;

class AuthController extends BaseController
{
  private $email;
  /**
   * Authentication api
   *
   * @return \Illuminate\Http\Response
   */
  public function signin(Request $request)
  {
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
      $user = Auth::user();

      $user['token_type'] = 'Bearer';
      $user['access_token'] =  $user->createToken('Pipapo')->accessToken;
      return $this->sendSuccess($user, 'User signin successfully.');
    } else {
      return $this->sendError('Unauthorized', '', 401);
    }
  }

  public function signinWithSocial(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|email'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $email = $input['email'];

    $user = User::where('email', $email)->first();
    if (is_null($user)) {
      return $this->sendFailed("Invalid email");
    }

    $user['token_type'] = 'Bearer';
    $user['access_token'] =  $user->createToken('Pipapo')->accessToken;
    return $this->sendSuccess($user, 'User signin successfully.');
  }

  public function signout(Request $request)
  {
    $value = $request->bearerToken();
    $id = (new Parser())->parse($value)->getHeader('jti');
    $token = $request->user()->tokens->find($id);
    $token->revoke();

    return $this->sendSuccess($success, 'User signout successfully');
  }

  public function nopermission(Request $request)
  {
    $message = '';
    return $this->sendError('Invalid token', '', 401);
  }

  public function sendVerificationCode(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|email'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $code = rand(100000, 999999);
    $email = $input['email'];

    $user = User::where('email', $email)->first();
    if (is_null($user)) {
      return $this->sendFailed("Account dosen't exist.");
    }

    $data = array('v_code' => $code);
    Mail::send(['text' => 'sent_verify'], $data, function ($message) use ($email) {
      // Set the receiver and subject of the mail.
      $message->to($email, '')->subject('Verification code');
      // Set the sender
      $message->from('bailangdevteam@outlook.com', 'Our Code World');
    });

    $user->otp = $code;
    $user->otp_expire = $this->get_now() + 300000;
    $user->save();

    return $this->sendSuccess('success', 'We sent you verification code. Please check your email');
  }

  public function sendSMSVerificationCode(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'phone' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $code = rand(100000, 999999);
    $phone = $input['phone'];

    $user = User::where('phone', $phone)->first();
    if (is_null($user)) {
      return $this->sendFailed("Account dosen't exist.");
    }

    $sid = 'AC14c61b4a00960988aea845820a9846b5';
    $token = '15ad822fd2f7e5e32fcc79f6ba2794d7';
    $sPhone = '+18552350535';
    $client = new Client($sid, $token);
    $message = $client->messages->create(
      $phone,
      array(
        'from' => $sPhone,
        'body' => 'Verification code: ' . $code
      )
    );

    $user->otp = $code;
    $user->otp_expire = $this->get_now() + 300000;
    $user->phone = $phone;
    $user->save();

    return $this->sendSuccess($message, 'We sent you verification code. Please check your phone');
  }

  public function verifyCode(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|email',
      'v_code' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $user = User::where('email', $input['email'])->first();

    if (is_null($user)) {
      return $this->sendFailed("Account dosen't exist.");
    }

    if ($user['otp'] == $input['v_code']) {
      if ($user->otp_expire < now()) {
        $user->email_verified = 1;
        $user->save();
        $user['token_type'] = 'Bearer';
        $user['access_token'] =  $user->createToken('Pipapo')->accessToken;
        return $this->sendSuccess($user, 'verification success');
      } else {
        return $this->sendFailed('The verification code expired');
      }
    } else {
      return $this->sendFailed('Invalid verification code');
    }
  }

  public function resetPassword(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $user = User::where('email', $input['email'])->first();

    if (is_null($user)) {
      return $this->sendFailed("Account dosen't exist.");
    }

    $code = rand(100000, 999999);
    $email = $input['email'];
    $password = $input['password'];

    $data = array('v_code' => $code);
    Mail::send(['text' => 'sent_verify'], $data, function ($message) use ($email) {
      // Set the receiver and subject of the mail.
      $message->to($email, '')->subject('Verification code');
      // Set the sender
      $message->from('bailangdevteam@outlook.com', 'Our Code World');
    });

    $expire = $this->get_now() + 300000;

    $passwordReset = PasswordReset::where('email', $email)->first();
    if (is_null($passwordReset)) {
      $input['password'] = bcrypt($password);
      $input['code'] = $code;
      $input['expire'] = $expire;
      PasswordReset::create($input);
    } else {
      $passwordReset['password'] = bcrypt($password);
      $passwordReset['code'] = $code;
      $passwordReset['expire'] = $expire;
      $passwordReset->save();
    }

    return $this->sendSuccess('success', 'We sent you verification code. Please check your email');
  }

  public function verifyCodePassword(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'email' => 'required|email',
      'password' => 'required',
      'v_code' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();
    $passwordReset = PasswordReset::where('email', $input['email'])->first();
    if (is_null($passwordReset)) {
      return $this->sendFailed("Request dosen't exist.");
    }

    if ($passwordReset->code != $input['v_code']) {
      return $this->sendFailed("Verification code dosen't match");
    }

    $user = User::where('email', $input['email'])->first();
    $user->password = bcrypt($input['password']);
    $user->save();

    return $this->sendSuccess('success', 'Password have reset.\nPlease login wiht new password.');
  }
}
