<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('restaurants', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name');
      $table->text('description');
      $table->string('image');
      $table->string('file_name');
      $table->string('address');
      $table->json('location');
      $table->string('phone');
      $table->string('email');
      $table->string('website');
      $table->json('open'); //Json string: {hour: 12, minute: 00}
      $table->json('close'); //Json string: {hour: 12, minute: 00}
      $table->integer('seated_burst');
      $table->integer('guest_room');
      $table->integer('guest_garden');
      $table->integer('reviews');
      $table->float('rate');
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
    Schema::dropIfExists('restaurants');
  }
}
