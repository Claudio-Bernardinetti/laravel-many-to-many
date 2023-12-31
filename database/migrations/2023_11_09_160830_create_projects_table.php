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
            Schema::create('projects', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('github_link')->nullable();
                $table->string('internet_link')->nullable();
                $table->string('cover_image')->nullable();
                $table->string('slug');
                $table->text('content')->nullable();
                $table->text('description')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('github_link');
            $table->string('internet_link')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('slug');
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
};
