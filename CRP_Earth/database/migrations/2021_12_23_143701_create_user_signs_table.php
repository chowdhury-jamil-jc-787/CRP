<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_signs', function (Blueprint $table) {
            $table->id()->startingValue(1);
            $table->text('userid');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->text('phone');
            $table->text('package');
            $table->text('gender');
            $table->string('image');
            $table->text('referral');
            $table->text('country');
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
        Schema::dropIfExists('user_signs');
    }
}
