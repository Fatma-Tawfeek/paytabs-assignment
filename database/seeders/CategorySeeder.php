<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Category A',
        ]);

        DB::table('categories')->insert([
            'name' => 'Category B',
        ]);

        DB::table('categories')->insert([
            'name' => 'SUB A1',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'SUB A2',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'SUB B1',
            'category_id' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'SUB B2',
            'category_id' => 2
        ]);
    }
}
