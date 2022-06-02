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
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_em')->references('id')->on('employee');
            $table->integer('r_lose')->default(0);
            $table->integer('r_bye')->default(0);
            $table->integer('r_late')->default(0);
            $table->integer('r_work')->default(0);
            $table->integer('r_dress')->default(0);
            $table->integer('r_clean')->default(0);
            $table->integer('r_meeting')->default(0);
            $table->integer('r-partic')->default(0);
            $table->integer('r_performance')->default(0);
            $table->integer('r_ot')->default(0);
            $table->integer('due_report')->default(0); 
            $table->integer('sum_point');           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reports');
    }
};
