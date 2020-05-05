<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginInfoController extends Controller
{
    public function GetLoginInfo(){
        $LoginInfo = Auth::user();
        return $res = response()->json($LoginInfo);
    }
}
