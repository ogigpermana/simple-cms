<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // factory(User::class, 3)->create();

        DB::table('users')->insert([
            [
                'name' => 'Ogi G Permana',
                'email' => 'ogi@example.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ]);
    }
}
