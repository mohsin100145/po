<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('secret');
            $table->string('accountcode');
            $table->string('callerid');
            $table->string('mailbox');
            $table->string('context');
            $table->string('type');
            $table->string('host');
            $table->string('thana');
            $table->integer('division_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->string('incharge')->nullable();
            $table->string('duty_officer')->nullable();
            $table->string('oc')->nullable();
            $table->string('address')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::drop('phones');
    }
}
