<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts',function($table){
            $table->string('cover_1');
            $table->string('cover_2');
            $table->string('contact_name');
            $table->string('contact_phone');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts',function($table){
            $table->dropColumn('cover_1');
            $table->dropColumn('cover_2');
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_phone');
        });
    }
}
