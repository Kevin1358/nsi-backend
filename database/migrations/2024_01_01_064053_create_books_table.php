<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("isbn");
            $table->string("title");
            $table->string("subtitle")->nullable();
            $table->string("author")->nullable();
            $table->dateTime("published")->nullable();
            $table->string("publisher")->nullable();
            $table->integer("pages")->nullable();
            $table->string("description")->nullable();
            $table->string("website")->nullable();
            $table->dateTime("created_at");
            $table->dateTime("updated_at");
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
};
