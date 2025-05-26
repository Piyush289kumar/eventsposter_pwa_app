<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the column first if you want to redefine it freshly
            if (Schema::hasColumn('users', 'user_category_id')) {
                // Drop foreign key if it exists (try-catch workaround)
                try {
                    $table->dropForeign(['user_category_id']);
                } catch (\Exception $e) {
                    // Foreign key doesn't exist, ignore
                }

                // Re-add the foreign key properly
                $table->dropColumn('user_category_id');
            }

            // Re-add the column and foreign key
            $table->foreignId('user_category_id')->nullable()->constrained('user_categories')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the foreign key and the column if rolling back
            $table->dropForeign(['user_category_id']);
            $table->dropColumn('user_category_id');
        });
    }
};
