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
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('asset_number')->index();
            $table->foreignId('asset_class_id');
            $table->string('short_description');
            $table->string('description')->nullable();
            $table->foreignId('object_id');
            $table->foreignId('make_id');
            $table->foreignId('asset_state_id')->default('1');
            $table->string('maintained_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
