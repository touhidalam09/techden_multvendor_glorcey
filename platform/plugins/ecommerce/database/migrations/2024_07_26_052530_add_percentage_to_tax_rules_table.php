<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('ec_tax_rules', function (Blueprint $table): void {
            $table->float('percentage', 8, 6)->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('ec_tax_rules', function (Blueprint $table): void {
            $table->dropColumn('percentage');
        });
    }
};