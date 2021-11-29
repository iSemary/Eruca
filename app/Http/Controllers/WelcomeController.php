<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {
    public function controllerMethod() {
        return view('welcome');

    }
    public function any() {
        return view('welcome');

    }
}
