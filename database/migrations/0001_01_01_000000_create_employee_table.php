<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations — CREATE the employees table.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('personnel_number')->unique();
            $table->string('surname');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('job_title');
            $table->string('faculty');
            $table->string('department');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations — DROP the employees table.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};