<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->id();
            $table->string('camp','100') ->comment ('所屬陣營') ;
            $table->string('rule','100') ->comment ('統治') ;
            $table->string('city','100') ->comment ('主要城市') ;
            $table->string('environment','100') ->comment ('整體環境') ;
            $table->string('level','100') ->comment ('科技水平') ;
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
        Schema::dropIfExists('camps');
    }
}
