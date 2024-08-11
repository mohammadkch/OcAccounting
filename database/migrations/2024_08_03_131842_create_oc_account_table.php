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
        Schema::create('oc_account', function (Blueprint $table) {
            $table->id();
            $table->char('username', 255)->nullable(false);
            $table->tinyInteger('month')->nullable(false)->unsigned();
            $table->tinyInteger('day')->nullable(false)->unsigned();
            $table->tinyInteger('month_cnt')->default(1)->nullable(false)->unsigned();
            $table->boolean('auto_revoke')->default(false)->nullable(false)->unsigned();
            $table->string('description')->nullable(true);
            $table->bigInteger('created_at')->nullable(false)->unsigned();
            $table->bigInteger('updated_at')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oc_account');
    }
};
