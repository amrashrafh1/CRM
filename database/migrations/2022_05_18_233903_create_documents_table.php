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
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('file');
            $table->boolean('status')->default(1)->comment('1=active 2=not active');
            $table->integer('type_id')->unsigned()->nullable();
            $table->string('publish_date')->nullable();
            $table->string('expiration_date')->nullable();
            $table->bigInteger('created_by_id')->unsigned();
            $table->bigInteger('modified_by_id')->unsigned()->nullable();
            $table->bigInteger('assigned_user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('type_id')->references('id')->on('document_type')->onDelete('set null');
            $table->foreign('created_by_id')->references('id')->on('users');
            $table->foreign('modified_by_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assigned_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document');
    }
};
