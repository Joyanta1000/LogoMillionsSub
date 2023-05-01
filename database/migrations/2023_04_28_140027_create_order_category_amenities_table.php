<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_category_amenities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_category_id');
            $table->string('name')->nullable();
            $table->longText('info')->nullable();
            $table->timestamps();
        });

        Schema::table('order_category_amenities', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('order_category_amenities', function (Blueprint $table) {
        //     $table->dropSoftDeletes();
        // });
        Schema::dropIfExists('order_category_amenities');
    }
};
