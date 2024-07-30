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
        Schema::create('festival_song', function (Blueprint $table) {
            $table->foreignId('festival_id')->constrained('festivals');
            $table->foreignId('song_id')->constrained('songs');
            $table->timestamps();
            $table->primary(['festival_id', 'song_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('festival_song');
    }
};
