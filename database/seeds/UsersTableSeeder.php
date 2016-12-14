<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(['name' => 'Administrator','login_id'=>'admin', 'password' => bcrypt('1234'), 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]);
        DB::table('users')->insert(['name' => 'Kazuyuki Hara','login_id'=>'hara', 'password' => bcrypt('blucatipp'), 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]);
        DB::table('users')->insert(['name' => 'Remz Fernandez','login_id'=>'remz123', 'password' => bcrypt('blucatipp'), 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]);
        DB::table('users')->insert(['name' => 'Tatsuro Nakagawa','login_id'=>'nakagawa', 'password' => bcrypt('blucatipp'), 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]);
    }
}
