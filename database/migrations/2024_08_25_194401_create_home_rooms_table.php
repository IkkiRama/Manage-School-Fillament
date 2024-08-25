<?php

use App\Models\Classroom;
use App\Models\Periode;
use App\Models\Teacher;
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
        Schema::create('home_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Teacher::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Classroom::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Periode::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('id_open')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_rooms');
    }
};
