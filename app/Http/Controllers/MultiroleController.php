<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultiroleController extends Controller
{
    public function login(){
        $role=auth::user()->role;

        if($role=='1'){
            return view('admin.dashboard');
        }else{
            return view('user.dashboard');
        }
    }
}
