<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function unboxingPage() {


        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Unboxing')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('kategori', 'Unboxing')->get();

        return view('layouts.unboxingPage', compact(
            'ProductKategori',
            'UnboxingArticles'));
    }

    public function fetchUnboxingProductArticles($product) {

        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Unboxing')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('product', $product)->where('kategori', 'Unboxing')->get();

        return view('layouts.unboxingPage', compact(
            'ProductKategori',
            'UnboxingArticles'));

    }

}
