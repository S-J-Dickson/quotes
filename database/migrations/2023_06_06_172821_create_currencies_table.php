<?php

use App\Models\Currency;
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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->char("code", 3);
            $table->float("exchange_rate");
            $table->integer("decimal_digits");
            $table->timestamps();
        });

        $currencies = [
            ['code' => 'GBP', 'exchange_rate' => 1, 'decimal_digits' => 2],
            ['code' => 'USD', 'exchange_rate' => 1.243, 'decimal_digits' => 2],
            ['code' => 'EUR', 'exchange_rate' => 1.139, 'decimal_digits' => 2],
            ['code' => 'AED', 'exchange_rate' => 4.565, 'decimal_digits' => 2],
            ['code' => 'CNY', 'exchange_rate' => 8.561, 'decimal_digits' => 2],
            ['code' => 'CAD', 'exchange_rate' => 1.673, 'decimal_digits' => 2],
            ['code' => 'CHF', 'exchange_rate' => 1.123, 'decimal_digits' => 2],
        ];

        foreach ($currencies as  $currency) {
            Currency::create($currency);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
