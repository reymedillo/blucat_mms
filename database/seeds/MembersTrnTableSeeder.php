<?php

use Illuminate\Database\Seeder;

class MembersTrnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_trn')->insert([
            'mid' => 1,
            'type' => 1,
            'message' => 'Added 80 points.'
        ]);
        DB::table('member_trn')->insert([
            'mid' => 1,
            'type' => 1,
            'message' => 'Added 120 points.'
        ]);
        DB::table('member_trn')->insert([
            'mid' => 2,
            'type' => 1,
            'message' => 'Added 60points.'
        ]);
        DB::table('member_trn')->insert([
            'mid' => 2,
            'type' => 1,
            'message' => 'Added 140 points.'
        ]);

        DB::table('member_trn')->insert([
            'mid' => 1,
            'type' => 2,
            'message' => '1 month renewal.'
        ]);
        DB::table('member_trn')->insert([
            'mid' => 1,
            'type' => 2,
            'message' => '1 week renewal.'
        ]);
        DB::table('member_trn')->insert([
            'mid' => 2,
            'type' => 2,
            'message' => '1 week renewal.'
        ]);
        DB::table('member_trn')->insert([
            'mid' => 2,
            'type' => 2,
            'message' => '1 month renewal.'
        ]);
    }
}
