<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'ImmoHEC.Admin',
            'username'=>'admin',
            'email'=>'admin@immohec.ci',
            'password'=>bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'ImmoHEC.Agent',
            'username'=>'agent',
            'email'=>'agent@immohec.ci',
            'password'=>bcrypt('rootagent'),
        ]);
    }
}
