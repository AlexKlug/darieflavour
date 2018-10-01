<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function unboxingPage() {


        $UnboxingArticles = DB::table('articles')->distinct()->where('kategori', 'Unboxing')->get();

        return view('layouts.unboxingPage', compact('UnboxingArticles'));
    }



}
