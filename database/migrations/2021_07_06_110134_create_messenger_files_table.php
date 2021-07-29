<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessengerFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messenger_files', function (Blueprint $table) {
            $table->id();
            $table->integer('messenger_id')->comment('FK:messengers.id')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_real_name')->nullable();
            $table->integer('file_type_id')->comment('FK:file_types.id')->nullable();
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
        Schema::dropIfExists('messenger_files');
    }
}
