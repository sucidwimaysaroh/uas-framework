<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('IdTransakasi');
            $table->bigInteger('IdOrder')->unsigned()->nullable();
            $table->string('FotoBukti');
            $table->string('Keterangan');
            $table->timestamps();
        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->foreign('IdOrder')->references('IdOrder')->on('orders')
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
        Schema::dropIfExists('transaction');
    }
}
