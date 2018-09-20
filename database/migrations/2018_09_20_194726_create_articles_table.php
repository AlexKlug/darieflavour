<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('overskrift');
            $table->text('langArtikelTekst');
            $table->text('kortArtikelTekst');
            $table->string('image');
            $table->string('imageALT');
            $table->string('kategori');
            $table->string('kategoriSmall');
            $table->string('dato');
            $table->integer('top');
            $table->string('kategoriColor');
            $table->string('author');
            $table->string('authorIMG');
            $table->string('brand');
            $table->text('description');
            $table->string('product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
