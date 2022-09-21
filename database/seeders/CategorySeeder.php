<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'cat1',
            'parent_id' => 0
        ]);
        DB::table('categories')->insert([
            'name' => 'cat2',
            'parent_id' => 0
        ]);
        DB::table('categories')->insert([
            'name' => 'cat3',
            'parent_id' => 0
        ]);
        DB::table('categories')->insert([
            'name' => 'cat1.1',
            'parent_id' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'cat1.2',
            'parent_id' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'cat1.1.1',
            'parent_id' => 4
        ]);
        DB::table('categories')->insert([
            'name' => 'cat1.1.2',
            'parent_id' => 4
        ]);
        DB::table('categories')->insert([
            'name' => 'cat1.1.2.1',
            'parent_id' => 7
        ]);
    }
}
