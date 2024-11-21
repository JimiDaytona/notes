<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => Hash::make('12345'),
//        ]);

        DB::table('users')->insert([
            ['name' => Str::random(10),
                'email ' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(100, 1000),
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['name' => Str::random(10),
                'email ' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(100, 1000),
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['name' => Str::random(10),
                'email ' => Str::random(10) . '@gmail.com',
                'age' => random_int(1, 100),
                'salary' => random_int(100, 1000),
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);

    }
}
