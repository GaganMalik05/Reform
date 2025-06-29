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
        Schema::create('attached_offices_appsc_regulation', function (Blueprint $table) {
            $table->id();
            $table->date('pulished_date');
            $table->string('title');
            $table->string('description');
            $table->string('file_link');
            $table->timestamps();
            $table->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attached_offices_appsc_regulation');
    }
};
