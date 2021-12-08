<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name','191') ->comment ('角色名稱') ;
            $table->tinyInteger('cid') ->unsigned()->comment ('所屬陣營編號') ;
            $table->string('title','191') ->comment ('角色稱號') ;
            $table->string('position','191') ->comment ('位置') ;
            $table->string('difficulty','191') ->comment ('角色使用難易度') ;
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
        Schema::dropIfExists('characters');
    }
}
