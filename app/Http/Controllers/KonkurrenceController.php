<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KonkurrenceController extends Controller
{

    public function konkurrence($urlDescription) {



        $specificKonkurrence = DB::table('konkurrencer')->where('url', $urlDescription)->get();

        $SocialMedia = DB::table('socialemedier')->where('id', 1)->get();


        return view('layouts.konkurrence', compact('specificKonkurrence', 'SocialMedia'));
    }

}
