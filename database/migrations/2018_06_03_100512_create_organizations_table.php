<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('organization name');
            $table->string('domain')->comment('organization domain');
            $table->uuid('uuid');
            $table->string('creator_name')->comment('who created account');
            $table->string('creator_email')->comment('who created account');
            $table->integer('website')->nullable();
            $table->integer('hostname')->nullable();
            $table->integer('customer')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
