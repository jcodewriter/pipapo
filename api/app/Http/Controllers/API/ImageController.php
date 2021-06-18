<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Picture;
use Validator;

class ImageController extends BaseController {
  public function download() {
    $file = public_path('images/products/')."p_logo1.png";
    // $ext = pathinfo($filename, PATHINFO_EXTENSION);

    // if($ext == 'png' || 'PNG'){
        // $headers = array(
        //   'Content-Type' => 'image/png',
        // );
    // }

    // else if($ext == 'jpg' || 'jpeg' || 'JPEG' || 'JPG'){
    //   $headers = array(
    //       'Content-Type' => 'image/jpeg',
    //     );
    //   }

    $headers = array(
      'Content-Type' => 'image/png',
    );

    return response()->download($file, 'products_logo.png', $headers);
  }
}
