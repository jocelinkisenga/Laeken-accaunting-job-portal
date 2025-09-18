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
        Schema::create('boulots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->string("type")->nullable();
            $table->date("due_date")->nullable();
            $table->boolean("published")->default(false);
            $table->boolean("done")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boulots');
    }
};
