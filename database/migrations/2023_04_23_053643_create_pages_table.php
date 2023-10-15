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
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_seo')->nullable();
            $table->string('slug')->unique();
            $table->string('subtitle', 255)->nullable();
            $table->string('author')->nullable();
            $table->string('image', 100)->nullable();
            $table->string('thumbnail', 100)->nullable();
            $table->text('annotation')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords', 100)->nullable();
            $table->text('content');
            $table->integer('paginated')->default(0);
            $table->integer('user_id')->default(1);
            $table->integer('category_id')->unsigned();
            $table->integer('visible')->default(1);
            $table->string('sort', 25)->default('asc');
            $table->integer('hits')->unsigned()->default(0);
            $table->integer('is_featured')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
