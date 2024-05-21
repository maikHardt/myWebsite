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
        Schema::create('stellen', function (Blueprint $table) {
            $table->id();
            $table->string('bezeichnung');
            $table->text('beschreibung');
            $table->decimal('salary', 10, 2); // Anpassung der Länge und Präzision
            $table->string('standort');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stellen');
    }
    
};
