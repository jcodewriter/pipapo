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
      $table->bigIncrements('id');
      $table->string('first_name');
      $table->string('surname')->nullable();
      $table->string('password');
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('gender')->nullable();
      $table->string('birthday')->nullable();
      $table->string('phone')->nullable();
      $table->string('company')->nullable();
      $table->string('street')->nullable();
      $table->string('house_number')->nullable();
      $table->string('door_number')->nullable();
      $table->string('additive')->nullable();
      $table->string('post_code')->nullable();
      $table->string('place')->nullable();
      $table->string('country')->nullable();
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
