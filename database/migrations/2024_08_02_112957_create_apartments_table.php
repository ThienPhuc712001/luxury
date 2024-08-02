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
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('address');
            $table->decimal('price', 10, 2);
            $table->text('general_info')->nullable();
            $table->text('detailed_info')->nullable();
            $table->string('image_url');
            $table->tinyInteger('status')->default(1); // 1: Available, 2: Reserved, 3: Sold
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
