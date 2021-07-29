<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('FK:users.id')->nullable();
            $table->string('designation')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->text('company_address')->nullable();

            $table->text('description')->nullable();
            $table->tinyInteger('current_working_status')->default(0)->comment('0=Not Present, 1=Presend Now');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=Inactive, 1=Active');
            $table->integer('updated_by')->comment('FK:users.id')->nullable();
            $table->timestamp('deleted_at')->comment('FK:users.id')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });
    }
}
//<<< HEAD
//            $table->text('description')->nullable();
//=======
//>>>>>>> ce058a27d61f8bbc197f6f67f55c61bdbc4a747d
//            $table->tinyInteger('current_working_status')->default(0)->comment('0=Not Present, 1=Presend Now');
//            $table->timestamp('start_date')->nullable();
//            $table->timestamp('end_date')->nullable();
//            $table->tinyInteger('status')->default(1)->comment('0=Inactive, 1=Active');
//            $table->integer('updated_by')->comment('FK:users.id')->nullable();
//            $table->timestamp('deleted_at')->comment('FK:users.id')->nullable();
//            $table->integer('deleted_by')->nullable();
//            $table->timestamps();
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::dropIfExists('job_experiences');
//    }
//}
