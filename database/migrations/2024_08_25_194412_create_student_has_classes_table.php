<?php

use App\Models\HomeRoom;
use App\Models\Periode;
use App\Models\Student;
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
        Schema::create('student_has_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(HomeRoom::class)->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('student_has_classes');
    }
};
