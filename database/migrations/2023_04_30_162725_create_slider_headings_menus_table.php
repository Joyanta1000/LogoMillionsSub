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
        Schema::create('slider_headings_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('heading_id')->nullable();
            $table->longText('details')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });
        Schema::table('slider_headings_menus', function (Blueprint $table) {
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
        Schema::dropIfExists('slider_headings_menus');
    }
};
