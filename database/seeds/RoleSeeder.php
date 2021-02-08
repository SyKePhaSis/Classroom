<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['student', 'teacher', 'admin'];

        foreach($titles as $title){
            DB::table('roles')->insert([
                'title' => $title,
            ]);
        }
    }
}
