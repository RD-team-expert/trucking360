<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToAboutUsTable extends Migration
{
    public function up()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->text('main_text')->nullable();
            $table->string('additional_image')->nullable();
            $table->text('description_text')->nullable();
            $table->string('video_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->dropColumn('main_text');
            $table->dropColumn('additional_image');
            $table->dropColumn('description_text');
            $table->dropColumn('video_url');
        });
    }
}
