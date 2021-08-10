<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('depth')->comment('깊이를 지정합니다.');
            $table->bigInteger('parent')->comment('depth 2 이상일경우 primary id 값을 지정합니다.');
            $table->char('title', 20)->comment('메뉴 명');
            $table->char('route', 100)->comment('이동할 라우트를 지정합니다. 비어있을경우 이동되지 않습니다.');
            $table->char('type', 20)->comment('depth 1일경우 클릭되었을 때 active 값을 지정하기 위해 고유값을 지정 합니다.');
            $table->integer('order')->comment('출력시킬 순서 입니다.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
