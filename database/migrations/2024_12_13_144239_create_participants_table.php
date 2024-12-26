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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('fullname');
            $table->string('nickname');
            $table->date('birthday');
            $table->string('hometown');
            $table->string('gender');
            $table->string('father');
            $table->string('mother');
            $table->string('junior_highschool');
            $table->string('senior_highschool');
            $table->unsignedBigInteger('event_id');
            
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
