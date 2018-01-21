<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            Schema::create('files', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('project_id')->unsigned();
                $table->foreign('project_id')->references('id')
                    ->on('projects')
                    ->onDelete('cascade');
                $table->string('mime');
                $table->string('original_name');
                $table->string('fileName');
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
