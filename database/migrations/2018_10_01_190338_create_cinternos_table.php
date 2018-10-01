<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCinternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinternos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kami_id');
            $table->string('ci_01',2000);
            $table->string('ci_02',2000);
            $table->string('ci_03',2000);
            $table->string('ci_04',2000);
            $table->string('ci_05',2000);
            $table->string('ci_06',2000);
            $table->timestamps();
            $table->softDeletes();

            //references
            $table->foreign('kami_id')->references('id')->on('kamis')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinternos');
    }
}
