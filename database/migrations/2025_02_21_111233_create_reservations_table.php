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
            // protected $fillable = ["reservation_date","client_id","slot_id", "course_id"];
            $table->id();
            $table->timestamp('reservation_date');
            $table->foreignIdFor(\App\Models\User::class, "user_id")->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\TimeSlot::class, "slot_id")->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Course::class, "course_id")->constrained()->cascadeOnDelete();

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
