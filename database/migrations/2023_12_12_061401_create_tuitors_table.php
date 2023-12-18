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
        Schema::create('tuitors', function (Blueprint $table) {
            $table->id('tuitor_id');
            $table->foreignId('tuition_id');
            $table->foreignId('location_id');
            $table->foreignId('class_id');
            $table->foreignId('category_id');
            $table->foreignId('city_id');
            $table->foreignId('subject_id');
            $table->foreignId('day_id');
            $table->foreignId('student_id');
            $table->foreignId('social_id');

            $table->string('student_gender');
            $table->string('tuitor_gender');
            $table->string('address');
            $table->string('institute_name');
            $table->time('tuition_time');
            $table->string('salary');
            $table->string('more_about');
            $table->date('hire_date');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuitors');
    }
};
