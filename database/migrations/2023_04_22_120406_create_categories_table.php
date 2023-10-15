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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('parent_id')->nullable(false)->default(0);
            $table->string('title');
            $table->string('title_menu');
            $table->string('slug')->unique();
            $table->string('image', 100)->nullable();
            $table->string('description')->nullable();
            $table->string('keywords', 100)->nullable();
            $table->text('content')->nullable();
            $table->integer('published')->default(1);
            $table->integer('paginated')->default(0);
            $table->string('sort', 25)->default('asc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
