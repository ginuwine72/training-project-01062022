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
        DB::table('users')->insert(
            array(
                'name' => 'สม',
                'email' => 'som@gmail.com',
                'password' => '1234',

        )
    );
        DB::table('users')->insert(
            array(
                'name' => 'สมชาย',
                'email' => 'somchai@gmail.com',
                'password' => '1234'
             
        )
    );

        DB::table('users')->insert(
            array(
                'name' => 'สมปอง',
                'email' => 'sompong@gmail.com',
                'password' => '1234'
                
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('fullname','=','สม')->delete();
        DB::table('users')->where('fullname','=','สมชาย')->delete();
        DB::table('users')->where('fullname','=','สมปอง')->delete();
    }
};
