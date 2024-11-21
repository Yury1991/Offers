<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Запуск миграции ('название таблицы', функция(){});
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('model');
            $table->text('standard_equipment');
            $table->unsignedDecimal('foreign_price', 6, 2); 
            $table->unsignedFloat('conversion_rate');
            $table->unsignedDecimal('ruble_price', 9, 2);    // стоимость станка - 9 разрядов и 2 разрядя после запятой
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // Откат миграции
    public function down()
    {
        Schema::dropIfExists('machines');
    }
}
