<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{

    public function welcome() {



        $firstArticle = DB::table('articles')->orderBy('id', 'desc')->limit(1)->get();

        $secondArticle = DB::table('articles')->orderBy('id', 'desc')->offset(1)->limit(1)->get();

        $thirdArticle = DB::table('articles')->orderBy('id', 'desc')->offset(2)->limit(1)->get();

        $fourthToSixthArticle = DB::table('articles')->orderBy('id', 'desc')->offset(3)->limit(3)->get();





        return view('layouts.frontPage', compact(
            'firstArticle',
            'secondArticle',
            'thirdArticle',
            'fourthToSixthArticle'
            ));
    }

}
