<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTranselationTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_transelation_tabel', function (Blueprint $table) {
            $table->increments('id');
                $table->integer('category_id')->unsigned();
                $table->string('locale')->index(); //ar en fr
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                // $table->text('address')->nullable();

                $table->unique(['category_id', 'locale']);
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_transelation_tabel');
    }
}
