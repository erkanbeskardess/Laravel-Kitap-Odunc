<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('title',100);
            $table->string('keywords')->nullable();
            $table->string('description',200);
            $table->text('detail',)->nullable();
            $table->integer('menu_id')->nullable();
            $table->string('image' )->nullable();
            $table->integer('user_id')->nullable();
            $table->string('status')->nullable()->default('False');
            $table->string('name',50);
            $table->string('novelist',50);
            $table->string('publisher',50);
            $table->float('price')->nullable();
            $table->integer('page')->nullable();








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
        Schema::dropIfExists('books');
    }
}
