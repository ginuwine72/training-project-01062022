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
                'img' => 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png'
        )
    );
        DB::table('employee')->insert(
            array(
                'fullname' => 'สมเจต',
                'dep' => 'พนักงาน',
                'img' => 'https://img.freepik.com/free-vector/woman-profile-cartoon_18591-58480.jpg'
        )
    );

        DB::table('employee')->insert(
            array(
                'fullname' => 'สมส้ม',
                'dep' => 'พนักงาน',
                'img' => 'https://img.freepik.com/free-vector/man-profile-cartoon_18591-58482.jpg?w=2000'
        )
    );
        DB::table('employee')->insert(
            array(
                'fullname' => 'สมสม',
                'dep' => 'พนักงาน',
                'img' => 'https://m.media-amazon.com/images/I/31Cd9UQp6eL._SX355_.jpg'
        )
    );
    DB::table('employee')->insert(
        array(
            'fullname' => 'สมศรี',
            'dep' => 'พนักงาน',
            'img' => 'https://m.media-amazon.com/images/I/41miU+cgrLL.jpg'
    )
);
    DB::table('employee')->insert(
        array(
            'fullname' => 'สมหญิง',
            'dep' => 'พนักงาน',
            'img' => 'https://m.media-amazon.com/images/I/41r0oAaPp0L.jpg'
    )
);

    DB::table('employee')->insert(
        array(
            'fullname' => 'สมชาย',
            'dep' => 'พนักงาน',
            'img' => 'https://m.media-amazon.com/images/I/41mSIgdsHvL.jpg'
    )
);
    DB::table('employee')->insert(
        array(
            'fullname' => 'สมปอง',
            'dep' => 'พนักงาน',
            'img' => 'https://cdn3.vectorstock.com/i/1000x1000/01/77/businesswoman-character-avatar-icon-vector-12800177.jpg'
    )
);
DB::table('employee')->insert(
    array(
        'fullname' => 'สมหมาย',
        'dep' => 'พนักงาน',
        'img' => 'https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png'
)
);
DB::table('employee')->insert(
    array(
        'fullname' => 'สมศักดิ์',
        'dep' => 'พนักงาน',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToIHOstd3H0WMh_xtRJxW0uX0sACmKxawgvFEaYGNzqJ5JBxUK-FT2s4hA04MXHLKNHuI&usqp=CAU'
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
