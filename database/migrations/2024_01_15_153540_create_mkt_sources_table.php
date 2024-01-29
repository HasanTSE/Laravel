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
        Schema::create('mkt_sources', function (Blueprint $table) {
            $table->id();

            $table->integer('company_id')->nullable();
            $table->string('mkt_source')->nullable();
            $table->integer('short_no')->nullable();
            $table->integer('is_active')->nullable();

            $table->integer('insert_by')->nullable();
            $table->integer('update_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mkt_sources');
    }
};
