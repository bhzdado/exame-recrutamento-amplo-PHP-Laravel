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
        Schema::create('tb_pessoas', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome', 100);
            $table->integer('idade');
            $table->date('dt_inclusao');
            $table->date('dt_exclusao')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pessoas');
    }
};
