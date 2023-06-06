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
        Schema::table('quotes', function (Blueprint $table) {
            $table->enum('status', ['sent', 'draft', ])->default('sent')->after("currency_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $count =  \App\Models\Quote::all()->count();

        if ($count > 0 ){
            throw new Exception("Cannot do rollback, as there is ". $count. " that have been created.");
        }

        Schema::table('quotes', function (Blueprint $table) {
            $table->dropColumn("status");
        });
    }
};
