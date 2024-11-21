<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
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

        DB::table('posts')->insert([
            ['title' => Str::random(10),
                'slug' => Str::random(10),
                'likes' => random_int(1, 10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['title' => Str::random(10),
                'slug' => Str::random(10),
                'likes' => random_int(1, 10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['title' => Str::random(10),
                'slug' => Str::random(10),
                'likes' => random_int(1, 10),
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);

    }
}
