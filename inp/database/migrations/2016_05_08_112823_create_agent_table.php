<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentTable extends Migration {
    public function up() {
        Schema::create('agent', function (Blueprint $table) {
            $table->increments('id');               // 递增id
            $table->string('account')->unique();    // 账户名称
            $table->string('company');              // 公司全称
            $table->string('represent');            // 联系人
            $table->string('telephone');            // 电话
            $table->string('bank_account');         // 银行卡号
            $table->string('taxpayer_id');          // 纳税人编号
            $table->string('business_license');     // 营业执照照片
        });
    }

    public function down() {
        Schema::drop('agent');
    }
}
