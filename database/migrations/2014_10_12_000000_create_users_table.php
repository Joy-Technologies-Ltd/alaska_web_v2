<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('user_type')->comment('1=admin,2=user')->nullable();
            $table->tinyInteger('signup_from')->default(1)->comment('1=General,2=Google, 3=Facebook')->nullable();
            $table->tinyInteger('user_verified')->comment('0=Not Verified, 1=Verified')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verified_code')->nullable();
            $table->string('firebase_token')->nullable();
            $table->string('web_token')->nullable();
            $table->tinyInteger('signup_status')->default(0)->comment('0=New, 1=Old')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=Inactive, 1=Active')->nullable();
            $table->integer('created_by')->comment('FK:users.id')->nullable();
            $table->integer('updated_by')->comment('FK:users.id')->nullable();
            $table->timestamp('deleted_at')->comment('FK:users.id')->nullable();
            $table->integer('deleted_by')->nullable();          
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
