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
        Schema::create('eveningclasses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('title_menu')->nullable();
            $table->string('slug')->unique();
            $table->string('author')->nullable();
            $table->string('video', 450)->nullable();
            $table->string('thumbnail', 100)->nullable();
            $table->text('annotation')->nullable();
            $table->string('description')->nullable();
            $table->string('keywords', 100)->nullable();
            $table->text('content');
            $table->integer('visible')->default(1);
            $table->integer('hits')->unsigned()->default(0);
            $table->integer('is_featured')->default(0);
            $table->integer('user_id')->default(1);
            $table->integer('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eveningclasses');
    }
};
