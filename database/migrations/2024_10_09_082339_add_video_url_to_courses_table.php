<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('video_url')->nullable(); // Add a video_url column
        });
    }
    
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('video_url');
        });
    }
    
};
