<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index()
    {

       $routeName = Route::currentRouteName();

        return view('frontend.home');
    }

    public function cmd()
    {

       $routeName = Route::currentRouteName();
        return view('frontend.cmd');
    }
}
