<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $role=Auth::user()->role_id;
        if($role=='1'){
            return view('admin.dashboard');
        }
        elseif($role=='2' || $role=='3' || $role=='4'){
            return view('dashboard');
        }
        elseif($role=='5'){
            return view('formateurDashboard');
        }
    }
}
