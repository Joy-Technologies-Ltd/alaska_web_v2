<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('status')->comment('1=Active, 0=Inactive')->nullable();
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
        Schema::dropIfExists('file_types');
    }
}
