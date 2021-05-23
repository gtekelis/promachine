<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSkroutzUrlToMpnListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mpn_lists', function (Blueprint $table) {
            $table->text('skroutz_url')->nullable();
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
            $table->dropColumn('skroutz_url');
        });
    }
}
