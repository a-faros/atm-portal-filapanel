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
        Schema::create('job_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->foreignId('department_id');
            $table->foreignId('user_id')->nullable()->comment('Null if vacant
User ID of either employee, contractor, intern ....');
            $table->boolean('is_team_asset_mgr')->default('0');
            $table->boolean('is_team_people_mgr')->default('0');
            $table->boolean('is_project_mgr')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_positions');
    }
};
