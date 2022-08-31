<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $user;

    public function index()
    {
        $this->user = Auth::user();

        if($this->user->user_type === 'admin')
        {
            return view('admin.dashboard.dashboard');
        }
        else
        {
            return view('front.home.home');
        }
    }
}
