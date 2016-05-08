<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesmanTable extends Migration {
    public function up() {
        Schema::create('salesman', function (Blueprint $table) {
            $table->increments('id');               // 递增id
            $table->string('account')->unique();    // 账户名称
            $table->string('username');             // 姓名
            $table->boolean('is_male');             // 性别，男true，女false
            $table->string('telephone');            // 电话
            $table->string('id_card_number');       // 身份证号码
            $table->string('id_card_front');        // 身份证正面
            $table->string('id_card_back');         // 身份证反面
            $table->string('bank_account');         // 银行卡号
        });
    }

    public function down() {
        Schema::drop('salesman');
    }
}
