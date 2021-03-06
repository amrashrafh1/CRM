<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->enum('status', ['leads', 'opportunity', 'won', 'closed']);
            $table->string('referral_source')->nullable();
            $table->string('position_title')->nullable();
            $table->string('industry')->nullable();
            $table->string('project_type')->nullable();
            $table->string('company')->nullable();
            $table->text('project_description')->nullable();
            $table->text('description')->nullable();
            $table->string('budget')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_country')->nullable();
            $table->string('address_zipcode')->nullable();
            $table->bigInteger('created_by_id')->unsigned();
            $table->bigInteger('modified_by_id')->unsigned()->nullable();
            $table->bigInteger('assigned_user_id')->unsigned()->nullable();
            $table->foreign('created_by_id')->references('id')->on('users');
            $table->foreign('modified_by_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assigned_user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
};
