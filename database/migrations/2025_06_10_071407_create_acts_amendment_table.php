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
        Schema::create('acts_amendment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('act_id')->constrained('act');
            $table->date('updated_date');
            $table->string('title');
            $table->string('description');
            $table->timestamps();
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acts_amendment');
    }
};
