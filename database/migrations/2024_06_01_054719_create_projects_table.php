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
            $table->string('title_en');
            $table->string('abstract');
            $table->string('abstract_en');
            $table->string('image');
            $table->text('content');
            $table->text('content_en');
            // $table->foreignId('principal_category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('category_project', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreignId('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
        Schema::dropIfExists('projects');
    }
};
