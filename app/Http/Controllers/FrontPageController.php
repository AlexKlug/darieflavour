<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{

    public function welcome() {



        $firstArticle = DB::table('articles')->limit(1)->get();



        return view('layouts.frontPage')->with('firstArticle', $firstArticle);
    }

}
