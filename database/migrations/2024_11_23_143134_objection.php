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
            $table->string('request_code')->unique(); 
            $table->string('nik', 16);
            $table->text('reason'); 
            $table->string('full_name');
            $table->text('address'); 
            $table->string('phone_number', 15); 
            $table->text('case_position'); 
            $table->string('file')->nullable(); 
            $table->enum('status', ['approved', 'rejected', 'checking'])->default('checking'); 
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
