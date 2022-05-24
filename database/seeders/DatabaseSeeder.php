<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
               'id_std'=>'00000000001',
               'name'=>'jirawat',
               'lastname'=>'prajon',
               'major' => '1',
               'email'=>'admin@mail.com',
               'status'=>'student',
               'password'=> bcrypt('123456'),
            ],
            [
               'id_std'=>'00000000002',
               'name'=>'jirawat ji',
               'lastname'=>'prajonnnnnnn',
               'major' => '1',
               'email'=>'user@mail.com',
               'status'=>'admin',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            \App\Models\User::factory()->create($value);
        }
    }
}
