<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->integer('serial')->default(100);
            $table->string('name', 60);
            $table->string('email', 60);
            $table->string('phone', 15);
            $table->string('projecttype', 30);
            $table->string('budget', 50);
            $table->string('deadline', 30);
            $table->string('contact', 30);
            $table->string('experience', 30);
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
