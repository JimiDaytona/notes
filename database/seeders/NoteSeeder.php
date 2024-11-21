<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NoteSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('notes')->insert([
            'title' => Str::random(10),
            'text' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
