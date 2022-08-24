<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function selectRole(Request $request)
    {
        Session::put('role',$request->role);
        return redirect()->route('register');
    }
}
