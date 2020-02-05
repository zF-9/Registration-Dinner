<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('meja');
            $table->string('jabatan');
            $table->string('jam')->nullable();
            $table->boolean('attend')->default(0);
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
        Schema::dropIfExists('list_names');
    }
}
