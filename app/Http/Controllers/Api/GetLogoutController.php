<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GetLogoutController extends Controller
{

    public function GetLogout(){
        Auth::logout();
        return redirect('/');
    }
}
