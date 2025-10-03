<?php

use App\Models\RoadmapStep;
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
        Schema::create('roadmap_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RoadmapStep::class, 'roadmap_step_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_suggested')->default(false);
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('icon')->nullable();
            $table->string('bg_color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roadmap_cards');
    }
};
