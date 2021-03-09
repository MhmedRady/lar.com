<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string("name",100)->nullable(false)->collation("utf8_general_ci");
            $table->string("logo",100)->nullable(false)->collation("utf8_general_ci");
            $table->string("mobile",20)->nullable(false)->collation("utf8_general_ci");
            $table->text("address")->nullable(false)->collation("utf8_general_ci");
            $table->string('email',20)->nullable(true)->collation("utf8_general_ci");
            $table->integer('Category_id')->default(0);
            $table->enum("active",[0,1])->default(0);
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine="InnoDB";
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
        Schema::dropIfExists('vendors');
    }
}
