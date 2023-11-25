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
        Schema::create('layouts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('position');
            $table->string('email');
            $table->string('phone');
            $table->string('Leavetype')->default('อื่นๆ');
            $table->text('vacation');
            $table->date('DateTo');
            $table->string('status')->default('รอพิจารณา');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layouts');
    }
};
