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
        Schema::create('post_sport', function (Blueprint $table) {
            
            //student_idとsubject_idを外部キーに設定
        $table->foreignId('post_id')->constrained('posts');   //参照先のテーブル名を
        $table->foreignId('sport_id')->constrained('sports');    //constrainedに記載
        $table->primary(['post_id', 'sport_id']);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_sport');
    }
};
