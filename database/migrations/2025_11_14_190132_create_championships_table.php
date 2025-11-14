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
        Schema::create('championships', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('slug', 250)->unique();
            $table->foreignId('sport_id')->constrained('sports');
            $table->foreignId('organizer_id')->nullable()->constrained('users');
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->foreignId('state_id')->constrained('championship_states');
            $table->json('rules')->nullable();
            $table->integer('points_win')->default(3);
            $table->integer('points_draw')->default(1);
            $table->integer('points_loss')->default(0);
            $table->integer('max_teams')->nullable();
            $table->string('format', 100)->nullable();
            $table->string('location', 255)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('championships');
    }
};
