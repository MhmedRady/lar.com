<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_categories', function (Blueprint $table) {
            $table->id();
            $table->string("translation_lang",10)->nullable(false);
            $table->char("translation_of",10);
            $table->string("name",150)->nullable(false)->collation("utf8_general_ci");
            $table->string("slug",150)->nullable(true);
            $table->string("photo",100)->nullable(true);
            $table->tinyInteger("active")->default(0);
            $table->engine = 'InnoDB';
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
        Schema::dropIfExists('main_categories');
    }
}
