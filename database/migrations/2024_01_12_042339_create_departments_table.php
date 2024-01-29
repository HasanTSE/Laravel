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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            $table->integer('company_id')->nullable();
            $table->string('dept_name')->nullable();
            $table->string('short_name')->nullable();
            $table->integer('scope_order')->nullable();
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
        Schema::dropIfExists('departments');
    }
};
