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
        Schema::create('rti_act_amendment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rti_act_id')->constrained('rti_act');
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
        Schema::dropIfExists('rti_act_amendment');
    }
};
