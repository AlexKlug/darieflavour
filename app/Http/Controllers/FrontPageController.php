<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{

    public function welcome() {
        return view('welcome');
    }

}
