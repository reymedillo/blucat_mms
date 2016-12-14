<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_tbl', function(Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('ranking');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact_number');
            $table->string('mail_address');
            $table->binary('pic')->nullable();
            $table->mediumInteger('points')->nullable();
            $table->mediumInteger('del_flag');
            $table->timestamp('wifi_exp_date')->nullable();
            $table->softDeletes();
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
        Schema::drop('member_tbl');
    }
}
