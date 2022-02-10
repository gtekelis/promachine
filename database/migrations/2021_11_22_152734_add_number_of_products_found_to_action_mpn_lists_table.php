<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumberOfProductsFoundToActionMpnListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('action_mpn_lists', function (Blueprint $table) {
            // $table->integer('num_of_products_found')->nullable();
            $table->boolean('has_many_products')->nullable();
            $table->boolean('does_product_exist')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('action_mpn_lists', function (Blueprint $table) {
            // $table->dropColumn('num_of_products_found');
            $table->dropColumn('has_many_products');
            $table->dropColumn('does_product_exist');
        });
    }
}
