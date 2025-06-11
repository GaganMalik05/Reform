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
        Schema::create('aprti_rules_amendment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aprti_rules_id')->constrained('aprti_rules');
            $table->date('pulished_date');
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
        Schema::dropIfExists('aprti_rules_amendment');
    }
};
