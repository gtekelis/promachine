<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewBestPriceFieldsToMpnListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mpn_lists', function (Blueprint $table) {
            $table->boolean('returns_one_product_best_price')->nullable();
            $table->text('best_price_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mpn_lists', function (Blueprint $table) {
            $table->dropColumn('returns_one_product_best_price');
            $table->dropColumn('best_price_url');
        });
    }
}
