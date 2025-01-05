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

        if (!Schema::hasTable('bookmarks')) {
            Schema::create('bookmarks', function (Blueprint $table) {
                $table->id();
                $table->morphs('user');
                $table->morphs('bookmarkable');
                $table->timestamps();
            });
        } else {
            Schema::table('bookmarks', function (Blueprint $table) {
                $table->after('user_id', function ($table) {
                    $table->string('user_type');
                });
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmarks');
    }
};
