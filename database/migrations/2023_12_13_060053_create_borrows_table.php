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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('name');
            $table->integer('pageCount');
            $table->integer('point');
            $table->unsignedBigInteger('author_id');
            $table->foreign(columns: 'author_id')->on('authors')->references('author_id');
            $table->unsignedBigInteger('type_id');
            $table->foreign(columns: 'type_id')->on('types')->references('type_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
