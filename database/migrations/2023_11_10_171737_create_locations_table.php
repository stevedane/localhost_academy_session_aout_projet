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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_location')->constrained('location','id');
            $table->foreignId('id_customer')->constrained('customer','id');
            $table->foreignId('id_car')->constrained('car','id');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('end_date');
            $table->decimal('prix');
            $table->prix('decimal');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
