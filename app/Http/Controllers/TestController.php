<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }

    public function about() {
        return 'About';
    }

    public function contact() {
        return 'Contact';
    }
}
