<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectPondsAndAngles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('angles', function (Blueprint $table) {
            $table->bigInteger('pond_id')->unsigned()->nullable();

        
            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('pond_id')->references('id')->on('ponds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('angles_ponds_id_foreign');
        $table->dropColumn('pondId');
    }
}