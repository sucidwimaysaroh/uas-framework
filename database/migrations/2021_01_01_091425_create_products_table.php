<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('IdProduk');
            $table->string('NamaProduk');
            $table->Integer('Harga');
            $table->Integer('Stok');
            $table->string('Kategori', 10);
            $table->text('Deskripsi');
            $table->string('Foto');
            $table->Integer('IdUser');
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
        Schema::dropIfExists('products');
    }
}
