<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class IsLoginController extends Controller
{
    public function IsLogin(){
        if(Auth::check())
            return '1';
        else
            return '0';
    }
}
