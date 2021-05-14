<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectSpeciesAngles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('angles', function (Blueprint $table) {
            $table->bigInteger('speciesId')->unsigned()->nullable();

        
            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('speciesId')->references('id')->on('species');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('angles_species_id_foreign');
        $table->dropColumn('species_id');
    }
}