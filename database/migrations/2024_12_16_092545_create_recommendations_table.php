<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->string('bidang');
            $table->float('matematika')->nullable();
            $table->float('fisika')->nullable();
            $table->float('kimia')->nullable();
            $table->float('biologi')->nullable();
            $table->float('ekonomi')->nullable();
            $table->float('sosiologi')->nullable();
            $table->float('geografi')->nullable();
            $table->string('minat');
            $table->string('prestasi');
            $table->string('prediction'); // Ensure column exists for prediction
            $table->timestamps();
        });
    }    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
