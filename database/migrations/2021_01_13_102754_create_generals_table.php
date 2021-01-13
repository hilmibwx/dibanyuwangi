<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('favicon');
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('footer');
            $table->longText('gmaps')->nullable();
            $table->longText('tawkto')->nullable();
            $table->longText('disqus')->nullable();
            $table->longText('gverification')->nullable();
            $table->longText('sharethis')->nullable();
            $table->string('keyword');
            $table->string('meta_desc');
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
        Schema::dropIfExists('generals');
    }
}
