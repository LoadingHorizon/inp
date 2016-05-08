<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');               // 递增id
            $table->string('account')->unique();    // 账户名称
            $table->string('email')->unique();      // 用户邮箱
            $table->string('password');             // 密码
            $table->integer('type');                // 用户类型
        });
    }

    public function down() {
        Schema::drop('users');
    }
}
