<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger("type_id");
            $table->foreign("type_id")->references("id")->on("types")->onDelete("cascade")->onUpdate("cascade");
            $table->enum("category", ['shop', 'gallery']);
            $table->string("price", 100);
            $table->string("name", 100);
            $table->string("material", 100);
            $table->string("height", 100);
            $table->string("width", 100);
            $table->string("thickness", 100);
            $table->string("image", 255);
            $table->string("location", 255)->nullable();
            $table->text("description")->nullable();
            $table->timestamps();
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
