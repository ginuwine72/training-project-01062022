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
         DB::table('employee')->insert(
            array(
                'fullname' => 'สม',
                'dep' => 'พนักงาน',
                'img' => ''
        )
    );
        DB::table('employee')->insert(
            array(
                'fullname' => 'สมเจต',
                'dep' => 'พนักงาน',
                'img' => ''
        )
    );

        DB::table('employee')->insert(
            array(
                'fullname' => 'สมส้ม',
                'dep' => 'พนักงาน',
                'img' => ''
        )
    );
        DB::table('employee')->insert(
            array(
                'fullname' => 'สมสม',
                'dep' => 'พนักงาน',
                'img' => ''
        )
    );
    DB::table('employee')->insert(
        array(
            'fullname' => 'สมศรี',
            'dep' => 'พนักงาน',
            'img' => ''
    )
);
    DB::table('employee')->insert(
        array(
            'fullname' => 'สมหญิง',
            'dep' => 'พนักงาน',
            'img' => ''
    )
);

    DB::table('employee')->insert(
        array(
            'fullname' => 'สมชาย',
            'dep' => 'พนักงาน',
            'img' => ''
    )
);
    DB::table('employee')->insert(
        array(
            'fullname' => 'สมปอง',
            'dep' => 'พนักงาน',
            'img' => ''
    )
);
DB::table('employee')->insert(
    array(
        'fullname' => 'สมหมาย',
        'dep' => 'พนักงาน',
        'img' => ''
)
);
DB::table('employee')->insert(
    array(
        'fullname' => 'สมศักดิ์',
        'dep' => 'พนักงาน',
        'img' => ''
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
        DB::table('employee')->where('fullname','=','สม')->delete();
        DB::table('employee')->where('fullname','=','สมเจต')->delete();
        DB::table('employee')->where('fullname','=','สมส้ม')->delete();
        DB::table('employee')->where('fullname','=','สมสม')->delete();
        DB::table('employee')->where('fullname','=','สมศรี')->delete();
        DB::table('employee')->where('fullname','=','สมหญิง')->delete();
        DB::table('employee')->where('fullname','=','สมชาย')->delete();
        DB::table('employee')->where('fullname','=','สมปอง')->delete();
        DB::table('employee')->where('fullname','=','สมหมาย')->delete();
        DB::table('employee')->where('fullname','=','สมศักดิ์')->delete();
    }
};
