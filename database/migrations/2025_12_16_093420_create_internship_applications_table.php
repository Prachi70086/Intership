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
    Schema::create('internship_applications', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->string('email');
        $table->string('phone');
        $table->string('institution');
        $table->string('degree');
        $table->string('major');
        $table->string('department');
        $table->string('duration');
        $table->date('start_date');
        $table->string('internship_type');
        $table->text('skills');
        $table->text('motivation');
        $table->string('resume'); // file path
        $table->timestamps();
    });
}
/**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_applications');
    }
};
