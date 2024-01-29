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
        Schema::create('parties', function (Blueprint $table) {
            $table->id();

           $table->integer('company_id')->nullable();
           $table->string('party_name')->nullable();
           $table->string('short_name')->nullable();
           $table->string('party_code')->nullable();
           $table->string('present_address')->nullable();
           $table->string('mobile_no')->nullable();
           $table->string('email_address')->nullable();
           $table->string('web_address')->nullable();
           $table->string('party_type')->nullable();
           $table->date('opening_date')->nullable();          
           $table->integer('opening_balance')->nullable();
           $table->integer('doc_id')->nullable();
           $table->integer('is_active')->nullable();
           $table->integer('insert_by_emp_id')->nullabale();
           $table->integer('update_by_emp_id')->nullabale();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
