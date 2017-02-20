<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutualfundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutualfunds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->float('acquired_value');
            $table->date('attained_date');
            $table->float('recent_value');
            $table->date('recent_date');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::drop('mutualfunds');
    }
}
