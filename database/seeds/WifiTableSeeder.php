<?php

use Illuminate\Database\Seeder;

class WifiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wifi_tbl')->insert([
            'wifi_pwd' => \Crypt::encrypt('1234'),
            'exp_date' => \Carbon\Carbon::now()
        ]);
    }
}
