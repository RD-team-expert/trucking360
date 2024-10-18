<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToServicesTable extends Migration
{
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->longText('overview')->nullable()->after('description');
            $table->longText('features')->nullable()->after('overview');
            $table->longText('benefits')->nullable()->after('features');
        });
    }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['overview', 'features', 'benefits']);
        });
    }
}
