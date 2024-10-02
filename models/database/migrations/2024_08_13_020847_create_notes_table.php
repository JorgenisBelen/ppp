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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->boolean('done')->default(false);
            $table->date('deadline');
            $table->timestamps();
            // $table->unsignedBigInteger('Example');
            // $table->float('ExampleFloat');
            // $table->double('Example');
            // $table->enum('Enum',['DRAF', 'PUBLISHED', 'DELETED']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
