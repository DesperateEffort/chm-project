<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('subscriptions', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamps();
      $table->string('price');
      $table->string('promo_tag')->nullable();
      $table->string('promo_span');
      $table->string('best_seller_tag')->nullable();
    });
  }
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('subscriptions');
  }
}
