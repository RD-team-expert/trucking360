<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyContactsTableAddFirstLastName extends Migration
{
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->dropColumn('name');
        });
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->dropColumn(['first_name', 'last_name']);
        });
    }
}