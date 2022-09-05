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
        Schema::create('technician', function (Blueprint $table) {
            $table->id();
            $table->string('username')->index();
            $table->foreign('username')->on('biodata')->references('username')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedFloat('star', 5)->default(0);
            $table->enum('badge', ['pro', 'trusted', 'silver'])->nullable();
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
        Schema::dropIfExists('technician');
    }
};
