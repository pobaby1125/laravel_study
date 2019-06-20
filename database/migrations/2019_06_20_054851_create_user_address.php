<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('use_address', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->char('user_id', 32)->unique()->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('username',32)->comment('联系人')->charset('utf8')->collation('utf8_unicode_ci');
            $table->bigInteger('mobile',20)->comment('手机号');
            $table->string('province',16)->comment('省')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('city',16)->comment('市')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('district',16)->comment('区')->charset('utf8')->collation('utf8_unicode_ci');
            $table->string('address',128)->comment('详细地址')->charset('utf8')->collation('utf8_unicode_ci');
            $table->mediumInteger('code',8)->comment('邮编');
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
        Schema::table('use_address', function (Blueprint $table) {
            //
        });
    }
}
