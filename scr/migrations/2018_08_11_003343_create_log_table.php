<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message')->nullable();
            $table->string('channel')->nullable();
            $table->integer('level')->default(0);
            $table->string('level_name', 20);
            $table->integer('unix_time');
            $table->text('datetime')->nullable();
            $table->longText('context')->nullable();
            $table->text('extra')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log');
    }
}
