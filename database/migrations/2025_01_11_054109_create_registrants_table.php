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
        Schema::create('registrants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('workplace');
            $table->string('speciality');
            $table->string('mobile');
            $table->string('email');
            // $table->string('scfhs_card')->nullable();
            // $table->string('feedback')->nullable();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->boolean('printed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrants');
    }
};
