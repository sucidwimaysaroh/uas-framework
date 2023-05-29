<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('IdOrder');
            $table->bigInteger('IdProduk')->unsigned()->nullable();
            $table->bigInteger('id')->unsigned()->nullable();
            $table->Integer('Jumlah');
            $table->string('Alamat')->nullable();
            $table->Integer('HargaTotal')->nullable();
            $table->string('Status', 20);
            $table->timestamps();

            });

            Schema::table('orders', function (Blueprint $table) {
                $table->foreign('IdProduk')->references('IdProduk')->on('products')
                ->onDelete('cascade')->onUpdate('cascade');

                $table->foreign('id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
