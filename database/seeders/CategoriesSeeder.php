<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CategoriesSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([ 
            'name' => 'Sport',
            'rating' => 'SU',
            'created_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Education',
            'rating' => 'SU',
            'created_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Politic',
            'rating' => '16+',
            'created_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Games',
            'rating' => '13+',
            'created_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Lifestyle',
            'rating' => 'SU',
            'created_at' => Carbon::now(),
        ]);
    }
}
