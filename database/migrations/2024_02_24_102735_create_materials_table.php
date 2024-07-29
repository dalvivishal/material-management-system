<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('materials', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('category_id');
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
      $table->string('name');
      $table->decimal('opening_balance', 10, 2);
      $table->timestamps();
      $table->softDeletes();
    });
  }

  public function down()
  {
    Schema::dropIfExists('materials');
  }
};
