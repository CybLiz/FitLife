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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamp('reservation_date');
            $table->foreignIdFor(\App\Models\User::class, "user_id")->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\TimeSlot::class, "slot_id")->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Course::class, "course_id")->constrained()->cascadeOnDelete();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
