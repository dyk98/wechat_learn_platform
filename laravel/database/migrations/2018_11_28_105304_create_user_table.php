<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();//时间
            $table->string('username',15)->unique();//用户名
            $table->string('passowrd',15);//密码
            $table->string('wx_openid')->index();//微信open_id
            $table->enum('sex',['promise','male','female'])->default('promise');//用户性别
            $table->string('email')->nullable();//用户邮箱
            $table->string('phone')->nullable();//用户手机号
            $table->string('api_token',60)->index();//api_token令牌
            $table->string('name')->nullable();//用户昵称
            $table->date('birth')->nullable();//用户生日
            $table->string('wx_name');//用户微信名
            $table->softDeletes();//软删除
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
