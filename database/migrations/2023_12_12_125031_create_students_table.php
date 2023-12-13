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
        Schema::create('students', function (Blueprint $table) {
            $table->id(column:'student_id');
            $table->string(column: 'name',length: 15);
            $table->string(column: 'surname',length: 15);
            $table->date(column: 'DOB');
            $table->enum(column: 'gender',allowed:['M','F','O']);
            $table->integer(column: 'class');
            $table->bigInteger(column: 'point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');

    }
};
