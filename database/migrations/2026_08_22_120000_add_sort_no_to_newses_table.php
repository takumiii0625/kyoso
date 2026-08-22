<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            ALTER TABLE newses
            ADD COLUMN sort_no INT NULL COMMENT '表示順（小さいほど先頭表示。NULLは未設定＝登録日順にフォールバック）' AFTER status
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE newses DROP COLUMN sort_no");
    }
};
