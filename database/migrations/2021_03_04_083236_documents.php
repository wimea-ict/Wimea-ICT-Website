<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Documents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('doc_Id');
            $table->string("name");
            $table->string("document");
            $table->string("category")->nullable();
            $table->string("date");
            $table->string("manual")->nullable();
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
        //
        Schema::dropIfExists('documents');
    }
}
