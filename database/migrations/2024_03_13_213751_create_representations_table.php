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
        Schema::create('representations', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('salle_id');
            $table->unsignedInteger('artiste_id');
            $table->date('DateRepresentation')->nullable();
            $table->time('HdebRepresentation')->nullable();
            $table->time('HfinRepresentation')->nullable();
            $table->timestamps();
            // $table->timestamps('DateRepresentation');
            // $table->timestamps('HdebRepresentation');
            // $table->timestamps('HfinRepresentation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representations');
    }
};
