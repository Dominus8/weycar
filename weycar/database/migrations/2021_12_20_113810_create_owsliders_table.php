<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwslidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owsliders', function (Blueprint $table) {
            $table->id();
            $table->integer('ow_id');
            $table->string('owtitle');
            $table->text('owsubtitle');
            $table->text('owimage');
            $table->text('owimage_alt');
            $table->text('owimage_desc');
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
        Schema::dropIfExists('owsliders');
    }
}
