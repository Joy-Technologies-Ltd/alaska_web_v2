<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('FK:users.id')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->float('age', 11, 2)->nullable();
            $table->integer('blood_group_id')->comment('FK:blood_groups.id')->nullable();
            $table->integer('gender')->comment('FK:genders.id')->nullable();
            $table->text('address')->nullable();
            $table->integer('country_id')->comment('FK:countries.id')->nullable();
            $table->integer('default_language_id')->commant('FK:languages.id')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=Inactive, 1=Active')->nullable();
            $table->integer('created_by')->comment('FK:users.id')->nullable();
            $table->integer('updated_by')->comment('FK:users.id')->nullable();
            $table->timestamp('deleted_at')->comment('FK:users.id')->nullable();
            $table->integer('deleted_by')->nullable();  
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
        Schema::dropIfExists('user_details');
    }
}
