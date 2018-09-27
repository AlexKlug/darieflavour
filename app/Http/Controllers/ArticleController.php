<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticle($kategori, $id, $overskrift) {

        $Article = DB::table('articles')->where('id', $id)->get();


        return view('layouts.article', compact('Article'));

    }
}
