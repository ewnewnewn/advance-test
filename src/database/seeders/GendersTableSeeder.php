<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class gendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'gender_name'=>'男性',
        ];
        DB::table('genders')->insert($param);

        $param=[
            'gender_name'=>'女性',
        ];
        DB::table('genders')->insert($param);
    }
}
