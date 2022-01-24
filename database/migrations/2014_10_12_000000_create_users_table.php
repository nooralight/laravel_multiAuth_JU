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
            $table->string('nameEn');
            $table->string('nameBn');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('blood')->nullable();
            $table->date('dob');
            $table->string('district')->nullable();
            $table->string('present_address')->nullable();
            $table->string('mobile');
            $table->string('fb_link')->nullable();
            $table->string('ju_batch');
            $table->string('iit_batch');
            $table->string('hall');
            $table->string('ac_session');
            $table->string('degree_obt');
            $table->string('occupation')->nullable();
            $table->string('designation')->nullable();
            $table->string('organization')->nullable();
            $table->string('address_org')->nullable();
            $table->boolean('is_user')->default(1);
            $table->boolean('is_admin')->default(0);
            $table->boolean('status')->default(0);
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
