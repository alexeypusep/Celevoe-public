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
        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('id_job');
            $table->primary('id_job');
            $table->char('id_org');
            $table->foreign('id_org')->references('id_org')->on('organizaciis')->onDelete('cascade');
            $table->char('id_direct');
            $table->foreign('id_direct')->references('id_direct')->on('directs')->onDelete('cascade');
            $table->string('position');
            $table->string('bonuses');
            $table->string('min_work');
            $table->string('amount_jobs');
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
        Schema::dropIfExists('jobs');
    }
};
