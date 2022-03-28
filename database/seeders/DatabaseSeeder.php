<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Insert Users
        DB::table('users')->insert([
            'first_name' => 'Madushan',
            'last_name' => 'Madushan',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'phone' => '076123456'
        ]);


        // Insert categories
        DB::table('categories')->insert([
            'name' => 'Biscuits'
        ]);
        DB::table('categories')->insert([
            'name' => 'Drinks'
        ]);
        DB::table('categories')->insert([
            'name' => 'Soaps'
        ]);
        DB::table('categories')->insert([
            'name' => 'Foods'
        ]);


        // Insert Products
        DB::table('products')->insert([
            'name' => 'Maliban Chocolate Biscuit',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '100',
            'category_id' => '1'
        ]);

        DB::table('products')->insert([
            'name' => 'Munchi Cream Cracker',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '1'
        ]);

        DB::table('products')->insert([
            'name' => 'Kothmale Milk Packet',
            'cost_price' => '40',
            'selling_price' => '60',
            'count' => '50',
            'category_id' => '2'
        ]);

        DB::table('products')->insert([
            'name' => 'Kohomba Soap',
            'cost_price' => '50',
            'selling_price' => '70',
            'count' => '50',
            'category_id' => '3'
        ]);

        DB::table('products')->insert([
            'name' => 'Maggie Noodeles',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '50',
            'category_id' => '4'
        ]);


    }
}
