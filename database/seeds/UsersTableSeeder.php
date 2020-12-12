<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];

        for ($i = 1; $i <= 10; $i++) {
            $users[] = [
                'email' => 'test+' . $i . '@gmail.com',
                'password' => Hash::make('a'),
                'name' => 'test+' . $i
            ];
        }

        DB::table(User::table())->insert($users);
    }
}
