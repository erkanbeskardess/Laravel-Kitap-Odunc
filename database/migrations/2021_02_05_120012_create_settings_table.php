<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',100)->nullable();;
            $table->string('keywords')->nullable();
            $table->string('description',200)->nullable();;
            $table->string('company',25)->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('email',75)->nullable();

            $table->string('smptpserver',75)->nullable();
            $table->string('smptpemail',75)->nullable();
            $table->string('smptppassword',75)->nullable();
            $table->string('smptpport',75)->nullable()->default(0);;

            $table->string('facebook',100)->nullable();
            $table->string('instagram',100)->nullable();
            $table->string('twitter',100)->nullable();

            $table->text('aboutus')->nullable();
            $table->text('contanct')->nullable();
            $table->text('references')->nullable();
            $table->string('status',75)->nullable();




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
        Schema::dropIfExists('settings');
    }
}
