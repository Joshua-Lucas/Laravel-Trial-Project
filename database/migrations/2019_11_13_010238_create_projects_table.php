<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD
=======
            $table->unsignedBigInteger('owner_id');
>>>>>>> 8124b25120ddce004325095078d0feabb7387bc5
            $table->string('title');
            $table->string('supervisor');
            $table->text('comments');
            $table->boolean('date_complete')->default(false);
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
        Schema::dropIfExists('projects');
    }
}
