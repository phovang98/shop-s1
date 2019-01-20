<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('supplier_id')->nullable()->comment('Nhà cung cấp');

            $table->string('name')->unique();
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->text('overview')->nullable();
            $table->text('description')->nullable();

            // Sales
            $table->decimal('cost', 10, 2)->default(0);
            $table->decimal('price', 10, 2)->default(0);
            $table->integer('percent')->nullable()->default(0);
            $table->decimal('discount', 10, 2)->nullable()->default(0);

            // Infor
//            $table->string('manufacturer')->nullable()->comment('Hãng sản xuất');
//            $table->string('warranty_method')->nullable()->comment('Phương thức bảo hành');
//            $table->integer('guarantee')->nullable()->comment('Năm bảo hành');
//            $table->date('release_date')->nullable()->comment('Ngày phát hành');
//            $table->date('date_manufacture')->nullable()->comment('Ngày sản xuất');
//            $table->date('shelf_life')->nullable()->comment('Hạn sử dụng');

            // analytics
            $table->integer('views')->nullable()->default(1);
            $table->float('star')->nullable()->default(0);

            $table->timestamps();

            $table->foreign('supplier_id')
                ->references('id')->on('suppliers')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

