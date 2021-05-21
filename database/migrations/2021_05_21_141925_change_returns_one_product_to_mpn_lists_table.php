<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeReturnsOneProductToMpnListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mpn_lists', function (Blueprint $table) {
            $table->boolean('returns_one_product')->nullable()->change();
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
            $table->boolean('returns_one_product');
        });
    }
}
