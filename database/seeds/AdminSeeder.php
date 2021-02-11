<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678')
            ]);

            $user = User::find(1);

            $user->roles()->attach([
                'role_id' => '3',
            ]);

            DB::table('profiles')->insert([
                'user_id' => '1',
                'description' => 'This is an admin account!',
                'email' => 'admin@admin.com',
            ]);
        }
    }
}
