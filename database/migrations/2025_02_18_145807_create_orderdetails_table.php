<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->integer('orderNumber');
            $table->string('productCode', 15);
            $table->integer('quantityOrdered');
            $table->decimal('priceEach', 10, 2);
            $table->smallInteger('orderLineNumber');
            $table->primary(['orderNumber', 'productCode']);
            $table->foreign('orderNumber')->references('orderNumber')->on('orders')->cascadeOnDelete();
            $table->foreign('productCode')->references('productCode')->on('products')->cascadeOnDelete();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdetails');
    }
};
