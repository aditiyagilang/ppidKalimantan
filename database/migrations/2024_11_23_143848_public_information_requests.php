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
        Schema::create('public_information_requests', function (Blueprint $table) {
            $table->id(); 
            $table->enum('request_category', ['individual', 'organization', 'group'])->default('individual'); 
            $table->string('nik', 16);
            $table->string('full_name');
            $table->string('file')->nullable(); 
            $table->text('address'); 
            $table->string('email')->unique();
            $table->string('phone_number', 15); 
            $table->string('occupation'); 
            $table->enum('status', ['approved', 'checking', 'rejected'])->default('checking'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_information_requests');
    }
};
