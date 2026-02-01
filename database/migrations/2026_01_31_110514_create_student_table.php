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
    Schema::create('student', function (Blueprint $table) {
        $table->id();

        // Student basic details
        $table->string('full_name');
        $table->string('email')->unique();
        $table->string('phone', 15);
        $table->string('password');

        // Location mapping
        $table->unsignedBigInteger('district_id');
        $table->unsignedBigInteger('block_id');

        // Education
        $table->string('college');
        $table->enum('education_status', ['pursuing', 'completed']);

        // Address & document
        $table->text('address');
        $table->string('resume_path');

        // Internship workflow status
        $table->enum('status', ['pending', 'approved', 'rejected'])
              ->default('pending');

        $table->timestamps();
    });
}

};
