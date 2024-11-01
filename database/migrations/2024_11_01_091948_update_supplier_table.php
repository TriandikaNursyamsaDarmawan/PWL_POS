<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('m_supplier', function(Blueprint $table){
            $table->renameColumn('level_id','supplier_id');
            $table->renameColumn('level_kode','supplier_kode');
            $table->renameColumn('level_nama','supplier_nama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
