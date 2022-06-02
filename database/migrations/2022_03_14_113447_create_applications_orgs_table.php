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
        Schema::create('applications_orgs', function (Blueprint $table) {
            $table->uuid('id_ap');
            $table->primary('id_ap');
            $table->string('name');
            $table->string('position_org');
            $table->string('profil');
            $table->string('job');
            $table->string('amount_job');
            $table->string('min_job');
            $table->string('support');
            $table->string('www_url');
            $table->string('contacts_org');
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
        Schema::dropIfExists('applications_orgs');
    }
};
