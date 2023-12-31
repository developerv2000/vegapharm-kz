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
    Schema::create('locales', function (Blueprint $table) {
      $table->id();
      $table->string('title')->unique();
      $table->string('value')->unique();
      $table->boolean('default');
      $table->boolean('default_for_dashboard');
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
    Schema::dropIfExists('locales');
  }
};
