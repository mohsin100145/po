<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carriers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('carrierid');
            $table->string('register');
            $table->string('disallow');
            $table->string('type');
            $table->string('dtmfmode');
            $table->string('context');
            $table->string('qualify');
            $table->string('insecure');
            $table->string('nat');
            $table->string('host');
            $table->string('username');
            $table->string('secret');
            $table->string('gsmallow');
            $table->string('alawallow');
            $table->string('ulawallow');
            $table->string('AGIexten');
            $table->string('SETexten');
            $table->string('Dialexten');
            $table->string('Hangupexten');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::drop('carriers');
    }
}
