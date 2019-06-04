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
            $table->bigIncrements('id');
            $table->string('name', 55);
            $table->string('email', 45)->unique();
            $table->string('document', 14)->unique()
                ->comment('aqui será o cpf');
            $table->date('birth');
            $table->string('phone', 15)->nullable();
            $table->string('address', 150);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->rememberToken(60);
            $table->boolean('is_admin')->nullable();
            $table->softDeletesTz();
            $table->timestampsTz();
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
