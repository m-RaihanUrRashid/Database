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
        Schema::create('therapist_notes', function (Blueprint $table) {
            $table->string('ctsUserID', 7);
            $table->string('cpUserID', 7);
            $table->text('cNotes');
            $table->foreign('ctsUserID')
                ->references('ctsUserID')
                ->on('therapist_t')
                ->onDelete('cascade');
            $table->foreign('cpUserID')
                ->references('cpUserID')
                ->on('patient_t')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
