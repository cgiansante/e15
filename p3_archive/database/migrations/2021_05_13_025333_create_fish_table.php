<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fish', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug', 100);
            $table->smallInteger('species_id');
            $table->string('pond_id', 100);
            $table->float('length_feet', 4, 2)->nullable;
            $table->float('length_inches', 2, 0)->nullable;
            $table->float('weight', 3, 1)->nullable;
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fish');
    }
}