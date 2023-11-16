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
        Schema::create('objects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type')->comment('Create a numbering system for each object type to your assets')->default('9999');
            $table->string('description')->comment('Short description to the object for easy identification

ie. An iPhone 15 bought at Harvey Norman
Therefore
Maker -> Make : Apple
Maker -> Model : iPhone 15
Object -> Description : Smart Phone
Vendor Name : Harvey Norman')->default('Not described');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objects');
    }
};
