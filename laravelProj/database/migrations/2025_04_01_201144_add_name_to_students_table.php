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
        // This migration is redundant because the columns already exist.
        // So, we will not make any changes here.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No changes to revert.
    }
};
