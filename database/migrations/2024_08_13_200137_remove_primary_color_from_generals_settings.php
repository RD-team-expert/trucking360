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

    }

    public function down()
    {
        Schema::table('generals_settings', function (Blueprint $table) {
            $table->dropColumn('primary_color');
        });
    }
};
