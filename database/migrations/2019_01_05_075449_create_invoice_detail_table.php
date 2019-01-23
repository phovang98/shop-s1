<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_detail', function (Blueprint $table) {
            $table->unsignedInteger('invoice_id');
            $table->unsignedInteger('product_id');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->primary(['invoice_id', 'product_id']);

//            $table->foreign('invoice_id')
//                ->references('id')->on('invoices')
//                ->onDelete('cascade');
//
//            $table->foreign('product_id')
//                ->references('id')->on('products')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_detail');
    }
}
