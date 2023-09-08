<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // return view('backend.dashboard');
        // return view('frontend.index');

        if (auth()->user()->role!='user') {
            return view('backend.dashboard');
        } else {
            return view('frontend.customer_account');
        }
    }
}
