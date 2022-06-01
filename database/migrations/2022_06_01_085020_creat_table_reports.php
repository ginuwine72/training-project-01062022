<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id_user');
            $table->bigIncrements('id_em');
            $table->int('r_lose')->default(0);
            $table->int('r_bye')->default(0);
            $table->int('r_late')->default(0);
            $table->int('r_work')->default(0);
            $table->int('r_dress')->default(0);
            $table->int('r_clean')->default(0);
            $table->int('r_meeting')->default(0);
            $table->int('r-partic')->default(0);
            $table->int('r_performance')->default(0);
            $table->int('r_ot')->default(0);
            $table->int('due_report')->default(0);            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee');
    }
};
