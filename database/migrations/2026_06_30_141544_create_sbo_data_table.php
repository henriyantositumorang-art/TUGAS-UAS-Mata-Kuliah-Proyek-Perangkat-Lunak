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
        Schema::create('sbo_data', function (Blueprint $table) {
            $table->id();
            $table->string('bucket');
            $table->integer('os_awal_acc')->default(0);
            $table->bigInteger('os_awal_os')->default(0);
            $table->integer('os_akhir_acc')->default(0);
            $table->bigInteger('os_akhir_os')->default(0);
            $table->decimal('os_akhir_pct_acc', 8, 2)->default(0.00);
            $table->decimal('os_akhir_pct_os', 8, 2)->default(0.00);
            $table->integer('flow_down_acc')->default(0);
            $table->bigInteger('flow_down_os')->default(0);
            $table->decimal('flow_down_pct_acc', 8, 2)->default(0.00);
            $table->decimal('flow_down_pct_os', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sbo_data');
    }
};
