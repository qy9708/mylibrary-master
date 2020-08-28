<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
      Schema::create('firms', function (Blueprint $table) {
          $table->engine='InnoDB';
          $table->increments('id');
          $table->string('name', 255);
          $table->string('reg_no', 100);
          $table->string('location', 100);
          $table->string('email', 50);
          $table->string('phone_no', 50);
          $table->string('website', 100);
          $table->string('nature_of_business', 100);
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
        Schema::dropIfExists('firms');
    }
}
