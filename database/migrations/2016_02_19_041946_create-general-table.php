<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name",255);
           
           
            $table->text("seo_des")->nullable();
            $table->text("seo_key")->nullable();

            $table->string("hotline");
            $table->string("phone",55);
             $table->string("email",55);
              $table->string("address",255);
              $table->string("picture")->nullable();
              $table->string("facebook")->nullable();
              $table->string("skype")->nullable();
              $table->string("twitter")->nullabe();
              $table->string("google")->nullable();
              


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
        Schema::drop('general');
    }
}
