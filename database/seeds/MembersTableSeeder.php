<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_tbl')->insert([
            'ranking' => 'Gold',
            'first_name' => 'Piko',
            'last_name'  => 'Taro',
            'contact_number' => '09231234567',
            'mail_address' => 'ppap@email.com',
            'points' => 34,
            'del_flag' => 0,
            'wifi_exp_date' => \Carbon\Carbon::now()
        ]);
        DB::table('member_tbl')->insert([
            'ranking' => 'Gold',
            'first_name' => 'Yamada',
            'last_name'  => 'Taro',
            'contact_number' => '09231231232',
            'mail_address' => 'yamada@email.com',
            'points' => 28,
            'del_flag' => 0,
            'wifi_exp_date' => \Carbon\Carbon::now()
        ]);
    }
}
