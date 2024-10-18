<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyContactsTableAddNameColumn extends Migration
{
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Drop the first_name and last_name fields
            $table->dropColumn(['first_name', 'last_name']);
            // Add the name field
            $table->string('name')->after('id');
        });
    }

    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Revert to first_name and last_name if needed
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->dropColumn('name');
        });
    }
}
