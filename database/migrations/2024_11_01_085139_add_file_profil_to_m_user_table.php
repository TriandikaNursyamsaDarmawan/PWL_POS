<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('m_user', function (Blueprint $table) {
        $table->string('file_profil')->nullable()->after('level_id');
    });
}

public function down()
{
    Schema::table('m_user', function (Blueprint $table) {
        $table->dropColumn('file_profil');
    });
}

};
