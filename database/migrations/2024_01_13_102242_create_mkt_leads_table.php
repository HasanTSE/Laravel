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
        Schema::create('mkt_leads', function (Blueprint $table) {
            $table->id();
              
            $table->string('lead_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->date('lead_gen_date')->nullable();
            $table->string('scope_id')->nullable();
            $table->integer('focus_scope_id')->nullable();
            $table->string('source_id')->nullable();
            $table->integer('budget_approx')->nullable();
            $table->integer('lead_days_approx')->nullable();
            $table->integer('mkt_emp_id')->nullable();
            $table->integer('mkt_dept_id')->nullable();
            $table->integer('mkt_desig_id')->nullable();
            $table->date('lead_closing_date')->nullable();
            $table->string('closing_reason_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('mkt_leads');
    }
};
