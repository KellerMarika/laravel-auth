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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 80)->comment('col-12');
            $table->string('type')->comment('col-5');
            $table->string('level')->default('@die')->comment('col-4');
            $table->boolean('completed')->default(true)->comment('col-3');
            $table->string('img')->comment('col-12');
            $table->text('description')->comment('col-12');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
