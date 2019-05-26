<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('stock')->nullable()->default(0);
            $table->string('url')->nullable();
            $table->double('price')->nullable();
            $table->string('slug');
            $table->unsignedInteger('location');
            $table->longText('notes')->nullable();
            $table->unsignedInteger('subcategory_id');
            $table->timestamps();

            $table->foreign('subcategory_id', 'part_sub_fk')->references('id')->on('subcategories')
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
        Schema::table('parts', function(Blueprint $table)
        {
            $table->dropForeign('part_sub_fk');
        });

        Schema::dropIfExists('parts');
    }
}
