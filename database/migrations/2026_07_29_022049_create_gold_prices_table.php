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
    Schema::create('gold_prices', function (Blueprint $table) {
        $table->id();

        $table->foreignId('brand_id')
              ->constrained('gold_brands')
              ->cascadeOnDelete();

        $table->decimal('sell_price',15,2);

        $table->decimal('buyback_price',15,2)
              ->nullable();

        $table->string('source');

        $table->timestamp('price_date');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_prices');
    }
};
