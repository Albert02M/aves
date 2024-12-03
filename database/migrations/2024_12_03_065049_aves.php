<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aves', function (Blueprint $table) {
            $table->id(); // Auto-incremental ID
            $table->string('familia', 50)->nullable();
            $table->string('nombrecientifico', 50)->nullable();
            $table->string('nombrecomun', 50)->nullable();
            $table->string('categoria', 50)->nullable();
            $table->text('caracteristicas')->nullable();
            $table->string('imagen', 50)->nullable();
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aves');
    }
}
