<?php

namespace App\Http\Controllers;

use core_question\bank\view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
}