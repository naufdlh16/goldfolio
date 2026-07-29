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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')
              ->constrained()
              ->cascadeOnDelete();

        $table->foreignId('brand_id')
              ->constrained('gold_brands')
              ->cascadeOnDelete();

        $table->decimal('weight',8,3);

        $table->integer('quantity')
              ->default(1);

        $table->decimal('buy_price',15,2);

        $table->decimal('admin_fee',15,2)
              ->default(0);

        $table->date('purchase_date');

        $table->string('store')
              ->nullable();

        $table->text('notes')
              ->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
