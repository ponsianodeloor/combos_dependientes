<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cantons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provincia_id');
            $table->string('canton');

            $table->foreign('provincia_id')
                ->on('provincias')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cantons');
    }
};
