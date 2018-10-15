<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function unboxingPage() {


        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Unboxing')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('kategori', 'Unboxing')->orderBy('id', 'desc')->get();

        return view('layouts.unboxingPage', compact(
            'ProductKategori',
            'UnboxingArticles'));
    }

    public function fetchUnboxingProductArticles($product) {

        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Unboxing')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('product', $product)->where('kategori', 'Unboxing')->orderBy('id', 'desc')->get();

        return view('layouts.unboxingPage', compact(
            'ProductKategori',
            'UnboxingArticles'));

    }




    public function anmeldelserPage() {


        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Anmeldelse')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('kategori', 'Anmeldelse')->orderBy('id', 'desc')->get();

        return view('layouts.anmeldelserPage', compact(
            'ProductKategori',
            'UnboxingArticles'));
    }

    public function fetchAnmeldelserProductArticles($product) {

        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Anmeldelse')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('product', $product)->where('kategori', 'Anmeldelse')->orderBy('id', 'desc')->get();

        return view('layouts.anmeldelserPage', compact(
            'ProductKategori',
            'UnboxingArticles'));

    }



    public function hyggePage() {


        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Hygge')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('kategori', 'Hygge')->orderBy('id', 'desc')->orderBy('id', 'desc')->get();

        return view('layouts.hyggePage', compact(
            'ProductKategori',
            'UnboxingArticles'));
    }

    public function fetchHyggeProductArticles($product) {

        $ProductKategori = DB::table('articles')->select('kategori','product')->where('kategori', 'Hygge')->distinct()->get();

        $UnboxingArticles = DB::table('articles')->where('product', $product)->where('kategori', 'Hygge')->orderBy('id', 'desc')->get();

        return view('layouts.hyggePage', compact(
            'ProductKategori',
            'UnboxingArticles'));

    }






}
