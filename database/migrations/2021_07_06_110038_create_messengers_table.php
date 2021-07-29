<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messengers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('FK:users.id')->nullable();
            $table->integer('contact_id')->comment('FK:users.id')->nullable();
            $table->text('sent_message')->nullable();
            $table->text('received_message')->nullable();
            $table->tinyInteger('image_status')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('file_status')->default(0)->comment('0=No, 1=Yes');
            $table->tinyInteger('seen_status')->default(0)->comment('0=Unseen, 1=Seen');
            $table->tinyInteger('status')->default(1)->comment('0=Inactive, 1=Active');
            $table->timestamp('seen_date_time')->nullable();
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
        Schema::dropIfExists('messengers');
    }
}
