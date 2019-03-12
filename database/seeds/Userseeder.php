<?php

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name'=>'admin',
            'email'=>'ad@gmail.com',
            'password'=>'123456',
            'address'=>'fweflwf',
            'phone'=>'1234567',
            'gender'=>'1',
            'id_group'=>'1',
            'id_department'=>'1',
            'is_admin'=>'1',
            'id_company'=>'1',
            'last_visit'=>\Carbon\Carbon::now()->toDateTimeString()
            ]);
    }
}
