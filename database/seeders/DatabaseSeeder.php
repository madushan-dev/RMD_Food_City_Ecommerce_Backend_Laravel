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
            'phone' => '076123456',
            'profile_photo'=>'user.png'
        ]);


        // Insert categories
        DB::table('categories')->insert([
            'name' => 'Fast Foods'
        ]);
        DB::table('categories')->insert([
            'name' => 'Biscuits'
        ]);
        DB::table('categories')->insert([
            'name' => 'Dry Foods'
        ]);
        DB::table('categories')->insert([
            'name' => 'Oils & Cooking'
        ]);
        DB::table('categories')->insert([
            'name' => 'Vegitables'
        ]);
        DB::table('categories')->insert([
            'name' => 'Spices'
        ]);
        DB::table('categories')->insert([
            'name' => 'Beverages'
        ]);

        DB::table('categories')->insert([
            'name' => 'Health & Fashion'
        ]);
        DB::table('categories')->insert([
            'name' => 'Household'
        ]);
        DB::table('categories')->insert([
            'name' => 'Stationary'
        ]);
    
    
        DB::table('categories')->insert([
            'name' => 'Others'
        ]);




        // Insert Products
   
        DB::table('products')->insert([
            'name' => 'Maggie Noodeles',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '50',
            'category_id' => '1',
            'product_image' => 'maggie-noodeles.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Bubbles 100g Chocolate',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '50',
            'category_id' => '1',
            'product_image' => 'Bubbles-chocolate.jpg'
        ]);


        DB::table('products')->insert([
            'name' => 'Maliban Chocolate Biscuit',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '100',
            'category_id' => '2',
            'product_image' => 'Maliban-Chocolate-Biscuits.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Chashew Nuts 1kg',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '3',
            'product_image' => 'chashew-nuts.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Sunflower Seeds 1kg',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '3',
            'product_image' => 'Sunflower-seeds.jpg'
        ]);

        
        DB::table('products')->insert([
            'name' => 'Coconut Oil 1L',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '4',
            'product_image' => 'Coconut-oil.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Palm Oil 1L',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '4',
            'product_image' => 'palm-oil.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Potato 500g Pack',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '5',
            'product_image' => 'potato-pack.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Oinion 500g Pack',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '5',
            'product_image' => 'oinion-pack.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Chillie Powder 100g',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '6',
            'product_image' => 'chillie-powder.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Pepper Powder 100g',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'category_id' => '6',
            'product_image' => 'Pepper-powder.jpg'
        ]);
        DB::table('products')->insert([
            'name' => 'Kothmale Milk Packet',
            'cost_price' => '40',
            'selling_price' => '60',
            'count' => '50',
            'category_id' => '7',
            'product_image' => 'kothmale-milk.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Cocacola 1.6l Bottle',
            'cost_price' => '40',
            'selling_price' => '60',
            'count' => '50',
            'category_id' => '7',
            'product_image' => 'cocacola-bottle.jpg'
        ]);

        
        // Insert Customer
        DB::table('customers')->insert([
            'first_name' => 'Prabash',
            'last_name' => 'Jayaweera',
            'address' => 'Badulla',
            'email' => 'prabash@gmail.com',
            'profile_photo' => 'user.png',
            'password' => bcrypt('1234'),
            'phone' => '077123456',
        ]);

         // Insert order
         DB::table('orders')->insert([
            'status' => 'Processing',
            'customer_id' => '1',
            'payment_type'=>'Card Payment',
            'payment_amount'=>'5000'
        ]);

         // Insert order_carts
        DB::table('order_carts')->insert([
            'customer_id' => '1',
            'product_id' => '1',
            'quantity' => '10'
        ]);
           
        DB::table('order_carts')->insert([
            'customer_id' => '1',
            'product_id' => '2',
            'quantity' => '5'
        ]);
          
         DB::table('order_carts')->insert([
                'customer_id' => '1',
                'product_id' => '3',
                'quantity' => '20'
            ]);

             
        DB::table('order_carts')->insert([
            'customer_id' => '1',
            'product_id' => '4',
            'quantity' => '10'
        ]);


           // Insert order_Products
        DB::table('order_products')->insert([
            'order_id' => '1',
            'product_id' => '1',
            'quantity' => '20',
            'cart_id' =>'1'
        ]);
        DB::table('order_products')->insert([
            'order_id' => '1',
            'product_id' => '2',
            'quantity' => '10',
            'cart_id' =>'1'
        ]);
        DB::table('order_products')->insert([
            'order_id' => '1',
            'product_id' => '3',
            'quantity' => '5',
            'cart_id' =>'1'
        ]);
        DB::table('order_products')->insert([
            'order_id' => '1',
            'product_id' => '4',
            'quantity' => '5',
            'cart_id' =>'1'
        ]);


    }
}
