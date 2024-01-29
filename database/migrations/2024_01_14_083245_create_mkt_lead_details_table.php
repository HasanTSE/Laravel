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
        Schema::create('mkt_lead_details', function (Blueprint $table) {
            $table->id();

            $table->integer('master_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->string('type')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('mobile')->nullable();
            $table->string('dept_name')->nullable();
            $table->string('desig_name')->nullable();
            $table->string('email')->nullable();
            $table->integer('image_id')->nullable();
            
            $table->integer('insert_by_emp_id')->nullable();
            $table->integer('update_by_emp_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mkt_lead_details');
    }
};
