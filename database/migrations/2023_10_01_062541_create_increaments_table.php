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
        Schema::create('increaments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->nullable()->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('employee_id')->nullable()->references('id')->on('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('department_id')->nullable()->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('percent');
            $table->date('inc_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('increaments');
    }
};
