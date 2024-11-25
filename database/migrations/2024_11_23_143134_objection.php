<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('objection', function (Blueprint $table) {
            $table->id(); 
            // $table->foreignId('request_id')->nullable()->constrained('public_information_requests')->onDelete('cascade');
            $table->string('code', 10);
            $table->string('nik', 16);
            $table->string('full_name');
            $table->text('address'); 
            $table->string('phone_number', 15); 
            $table->text('case_position'); 
            $table->text('reason'); 
            $table->string('file')->nullable(); 
            $table->enum('status', ['Approved', 'Rejected', 'Checking'])->default('checking'); 
            $table->text('reject_reason')->nullable(); 
            $table->timestamps(); 
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objection');
    }
};
