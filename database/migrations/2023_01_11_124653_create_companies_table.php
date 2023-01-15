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
        Schema::create('companies', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedBigInteger('user_id')->unsigned();

            $table->string('name')->unque();

            $table->string('phone');
            $table->string('country')->nullable();
            $table->string('city');
            $table->string('info')->nullable();
            $table->string('address');

            $table->string('photo')->nullable();
            $table->boolean('status')->default(true);

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
