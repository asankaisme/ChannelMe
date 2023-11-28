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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('age')->nullable();
            $table->integer('gender')->nullable();
            $table->string('add1')->nullable();
            $table->string('add2')->nullable();
            $table->string('city')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('contactPerson')->nullable();
            $table->string('contMobile')->nullable();
            $table->string('bloodGroup')->nullable();
            $table->integer('isActive')->default(1);
        });

        Schema::table('patients', function (Blueprint $table){
            $table->string('fname', 100)->change();
        });
        Schema::table('patients', function (Blueprint $table){
            $table->string('lname', 100)->change();
        });
        Schema::table('patients', function (Blueprint $table){
            $table->string('contactPerson', 100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
