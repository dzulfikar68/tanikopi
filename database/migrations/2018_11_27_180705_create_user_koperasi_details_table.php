<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserKoperasiDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_koperasi_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('organization_detail');
            $table->integer('land_area');
            $table->integer('total_harvest');
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
        Schema::dropIfExists('user_koperasi_details');
    }
}
