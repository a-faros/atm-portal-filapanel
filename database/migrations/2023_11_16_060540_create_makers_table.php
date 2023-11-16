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
        Schema::create('makers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make')->comment('Object is made by which manufacturer.
ie. An iPhone 15 bought at Harvey Norman
Therefore
Maker -> Make : Apple
Maker -> Model : iPhone 15
Object -> Description : Smart Phone
Vendor Name : Harvey Norman
Object ');
            $table->string('model')->comment('Object is made and named what model.
ie. An iPhone 15 bought at Harvey Norman
Therefore
Maker -> Make : Apple
Maker -> Model : iPhone 15
Object -> Description : Smart Phone
Vendor Name : Harvey Norman
Object ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makers');
    }
};
