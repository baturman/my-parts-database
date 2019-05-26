<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('description')->nullable();
            $table->unsignedInteger('category_id');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('category_id', 'sub_cat_fk')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('subcategories', function(Blueprint $table)
        {
            $table->dropForeign('sub_cat_fk');
        });

        Schema::dropIfExists('subcategories');
    }
}
