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
            $table->integer('tuition_id');
            $table->integer('city_id');
            $table->integer('subject_id');
            $table->integer('day_id');
            $table->integer('student_id');
            $table->integer('social_id');

            $table->string('student_gender');
            $table->string('tuitor_gender');
            $table->string('address');
            $table->string('institute_name');
            $table->time('tuition_time');
            $table->string('salary');
            $table->string('about');
            $table->date('date');
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
