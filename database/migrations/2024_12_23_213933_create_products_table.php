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

        // Migration for 'categories'
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); // 'bigint unsigned' primary key
            $table->string('name');
            $table->longText('description');
            $table->timestamps();
        });

        // Migration for 'products'
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();


            $table->unsignedInteger('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });



    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');

    }
};
