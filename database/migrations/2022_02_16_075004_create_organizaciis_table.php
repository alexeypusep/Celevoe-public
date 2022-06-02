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
        Schema::create('organizaciis', function (Blueprint $table) {
            $table->uuid('id_org');
            $table->primary('id_org');
            $table->string('name_org');
            $table->string('logo');
            $table->text('description');
            $table->string('www_page');
            $table->string('contacts');
            $table->boolean('confirm');
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
        Schema::dropIfExists('organizaciis');
    }
};
