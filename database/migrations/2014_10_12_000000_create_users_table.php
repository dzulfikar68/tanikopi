<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->string('phone');
            $table->string('gender');
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('status')->default(0)->comment('0 inactive 1 active');
            $table->string('token', 32)->comment('Token for registered user');
            $table->integer('token_status')->default(0)->comment('status token for registered user (0 inactive 1 active)');
            $table->dateTime('token_lifetime')->comment('expired date for token');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
