<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsProcessedBestPriceToEanLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ean_lists', function (Blueprint $table) {
            $table->boolean('is_processed_best_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ean_lists', function (Blueprint $table) {
            $table->drop('is_processed_best_price');
        });
    }
}
