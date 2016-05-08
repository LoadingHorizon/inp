<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInsuranceTable extends Migration {
    public function up() {
        Schema::create('car_insurance', function (Blueprint $table) {
            $table->increments('id');                       // 递增id
            $table->string('owner_name');                   // 车主姓名
            $table->string('owner_id_card_number');         // 身份证号
            $table->string('owner_telephone');              // 电话
            $table->string('city');                         // 承保城市
            $table->string('car_id');                       // 汽车牌照号码
            $table->string('engine_id');                    // 发动机号码
            $table->string('vehicle_id');                   // 车辆识别代号
            $table->string('driving_license_date');         // 行驶证登记日期
            $table->string('car_model');                    // 汽车品牌和型号
            $table->string('compulsory_insurance_date');    // 交强险起保日期
            $table->string('commercial_insurance_date');    // 商业险起保日期
            $table->string('liability_insurance_date');     // 三责险保险金额
            $table->string('car_damage_insurance_date');    // 车损险不计免赔
            $table->string('additional_insurance_desc');    // 其他附加险说明
            $table->boolean('is_transfer');                 // 是否一年内过户
            $table->string('extra_desc');                   // 额外说明
            $table->string('receive_address');              // 保单收件地址
            $table->string('receive_contact');              // 收件联系人
            $table->string('receive_telephone');            // 收件人电话
            $table->string('status');                       // 承保成功与否
            $table->string('total_insurance');              // 保险总金额
            $table->string('vehicle_tax');                  // 车船税
            $table->string('compulsory_insurance');         // 交强险
            $table->string('commercial_insurance');         // 商业险
            $table->string('compulsory_insurance_ratio');   // 交强险佣金比例
            $table->string('commercial_insurance_ratio');   // 商业险佣金比例
        });
    }

    public function down() {
        Schema::drop('car_insurance');
    }
}
