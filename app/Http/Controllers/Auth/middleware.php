<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class middleware extends Controller
{
    public function user(Request $request) {
        return $request->user();
    }
}