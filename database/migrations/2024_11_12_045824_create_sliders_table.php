<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('offer');
            $table->string('title');
            $table->string('sub_title');
            $table->string('short_description')->nullable();
            $table->string('long_description')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_text')->nullable();
            $table->string('aria_label')->nullable();
            $table->string('alt_text')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->boolean('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
