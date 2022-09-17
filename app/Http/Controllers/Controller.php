<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Exception;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

$defaultTimeZone='America/Argentina/Buenos_Aires';
if(date_default_timezone_get()!=$defaultTimeZone)
  date_default_timezone_set($defaultTimeZone);

class Controller extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Invalid UserId';
    return $errorMsg;
  }
}
?>
