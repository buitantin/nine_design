<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->enum("is_payment",['0','1'])->default('0');
            $table->string("address")->nullable();
            $table->string("width")->nullable();
            $table->string("height")->nullable();
            $table->string("page")->nullable();

            $table->integer("cid_catechild");
            
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
        Schema::drop('order');
    }
}
