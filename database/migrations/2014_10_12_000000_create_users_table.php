<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('mobile', 15)->ubique();
            $table->string('location', 20)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('state', 20)->nullable();
            $table->string('country', 20)->nullable();
            $table->string('password');
            $table->enum('role', ['Super Admin', 'Admin', 'Manager', 'Master Distributor', 'Distributor', 'Partner', 'Balance Transfer Distributor', 'Voucher User']);
            $table->tinyInteger('status');
            $table->timestamp('active_from')->nullable();
            $table->boolean('account_approved')->nullable()->default(false);
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
