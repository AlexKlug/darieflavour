<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'id',
        'overskrift',
        'langArtikelTekst',
        'kortArtikelTekst',
        'image',
        'imageALT',
        'kategori',
        'kategoriSmall',
        'dato',
        'top',
        'kategoriColor',
        'author',
        'authorIMG',
        'brand',
        'description',
        'product',
    ];
}
