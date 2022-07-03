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
            'address' => 'Hambantota',
            'password' => bcrypt('1234'),
            'phone' => '0761234567',
            'profile_photo'=>'user.png'
        ]);

        DB::table('brands')->insert([
            'name' => 'Maliban',
            'description'=>'Maliban'
          
        ]);

        DB::table('users')->insert([
            'first_name' => 'Avishka',
            'last_name' => 'Yohan',
            'email' => 'yohan@gmail.com',
            'address' => 'Balangoda',
            'password' => bcrypt('1234'),
            'phone' => '0702617281',
            'profile_photo'=>'user.png'
        ]);
        DB::table('users')->insert([
            'first_name' => 'Kancha',
            'last_name' => 'Induwara',
            'email' => 'induwara@gmail.com',
            'address' => 'Polonnaruwa',
            'password' => bcrypt('1234'),
            'phone' => '0772617261',
            'profile_photo'=>'user.png'
        ]);

      // Insert supplier

        DB::table('suppliers')->insert([
            'company' => 'Maliban Lanka',
            'email' => 'maliban@gmail.com',
            'address' => 'colombo',
            'phone' => '0772617261',
        ]);

        DB::table('suppliers')->insert([
            'company' => 'Freelan Lanka',
            'email' => 'freelan@gmail.com',
            'address' => 'Matara',
            'phone' => '0772647261',
        ]);
   


        // Insert categories
        DB::table('categories')->insert([
            'name' => 'Fast Foods',
            'description'=>'Fast Foods'
        ]);
        DB::table('categories')->insert([
            'name' => 'Biscuits',
            'description'=>'Biscuits'
        ]);
        DB::table('categories')->insert([
            'name' => 'Dry Foods',
            'description'=>'Dry Foods'
        ]);
        DB::table('categories')->insert([
            'name' => 'Oils & Cooking',
            'description'=>'Oils & Cooking'
        ]);
        DB::table('categories')->insert([
            'name' => 'Vegitables',
            'description'=>'Vegitables'
        ]);
        DB::table('categories')->insert([
            'name' => 'Spices',
            'description'=>'Spices'
        ]);
        DB::table('categories')->insert([
            'name' => 'Beverages',
            'description'=>'Beverages'
        ]);

        DB::table('categories')->insert([
            'name' => 'Health & Fashion',
            'description'=>'Health & Fashion'
        ]);
        DB::table('categories')->insert([
            'name' => 'Household',
            'description'=>'Household'
        ]);
        DB::table('categories')->insert([
            'name' => 'Stationary',
            'description'=>'Stationary'
        ]);
    
    
        DB::table('categories')->insert([
            'name' => 'Others',
            'description'=>'Others'
        ]);




        // Insert Products
   
        DB::table('products')->insert([
            'name' => 'Maggie Noodeles',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '1',
            'product_image' => 'maggie-noodeles.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Bubbles 100g Chocolate',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '50',
            'description' => 'Bubbles 100g Chocolate',
            'category_id' => '1',
            'product_image' => 'Bubbles-chocolate.jpg',
            'brand_id'=>'1'
        ]);


        DB::table('products')->insert([
            'name' => 'Maliban Chocolate Biscuit',
            'cost_price' => '60',
            'selling_price' => '80',
            'count' => '100',
            'description' => 'Maggie Noodeles',
            'category_id' => '2',
            'product_image' => 'Maliban-Chocolate-Biscuits.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Chashew Nuts 1kg',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '3',
            'product_image' => 'chashew-nuts.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Sunflower Seeds 1kg',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '3',
            'product_image' => 'Sunflower-seeds.jpg',
            'brand_id'=>'1'
        ]);

        
        DB::table('products')->insert([
            'name' => 'Coconut Oil 1L',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '4',
            'product_image' => 'Coconut-oil.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Palm Oil 1L',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '4',
            'product_image' => 'palm-oil.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Potato 500g Pack',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '5',
            'product_image' => 'potato-pack.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Oinion 500g Pack',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '5',
            'product_image' => 'oinion-pack.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Chillie Powder 100g',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '6',
            'product_image' => 'chillie-powder.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Pepper Powder 100g',
            'cost_price' => '80',
            'selling_price' => '100',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '6',
            'product_image' => 'Pepper-powder.jpg',
            'brand_id'=>'1'
        ]);
        DB::table('products')->insert([
            'name' => 'Kothmale Milk Packet',
            'cost_price' => '40',
            'selling_price' => '60',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '7',
            'product_image' => 'kothmale-milk.jpg',
            'brand_id'=>'1'
        ]);

        DB::table('products')->insert([
            'name' => 'Cocacola 1.6l Bottle',
            'cost_price' => '40',
            'selling_price' => '60',
            'count' => '50',
            'description' => 'Maggie Noodeles',
            'category_id' => '7',
            'product_image' => 'cocacola-bottle.jpg',
            'brand_id'=>'1'
        ]);

        
        // Insert Customer
        DB::table('customers')->insert([
            'first_name' => 'Prabash',
            'last_name' => 'Jayaweera',
            'address' => 'Badulla',
            'email' => 'prabash@gmail.com',
            'profile_photo' => 'user.png',
            'password' => bcrypt('1234'),
            'phone' => '0776743567',
        ]);
        DB::table('customers')->insert([
            'first_name' => 'Madushan',
            'last_name' => 'Gunarathne',
            'address' => 'Hambantota',
            'email' => 'madushan@gmail.com',
            'profile_photo' => 'user.png',
            'password' => bcrypt('1234'),
            'phone' => '0773298456',
        ]);
        DB::table('customers')->insert([
            'first_name' => 'Sudeera',
            'last_name' => 'Kavishka',
            'address' => 'Balangoda',
            'email' => 'sudeera@gmail.com',
            'profile_photo' => 'user.png',
            'password' => bcrypt('1234'),
            'phone' => '0705261782',
        ]);
        DB::table('customers')->insert([
            'first_name' => 'Rakshitha',
            'last_name' => 'Siriwardana',
            'address' => 'Kaluthara',
            'email' => 'rakshitha@gmail.com',
            'profile_photo' => 'user.png',
            'password' => bcrypt('1234'),
            'phone' => '0761342671',
        ]);
        DB::table('customers')->insert([
            'first_name' => 'Avishka',
            'last_name' => 'Yohan',
            'address' => 'Balangoda',
            'email' => 'avishka@gmail.com',
            'profile_photo' => 'user.png',
            'password' => bcrypt('1234'),
            'phone' => '0710241562',
        ]);
        DB::table('customers')->insert([
            'first_name' => 'Wihanga',
            'last_name' => 'Dilantha',
            'address' => 'Polonnaruwa',
            'email' => 'wihanga@gmail.com',
            'profile_photo' => 'user.png',
            'password' => bcrypt('1234'),
            'phone' => '0702671252',
        ]);

         // Insert order
         DB::table('orders')->insert([
            'status' => 'Processing',
            'customer_id' => '1',
            'payment_type'=>'Card Payment',
            'payment_amount'=>'5000',
            'profit'=>'50'
        ]);
        DB::table('orders')->insert([
            'status' => 'Processing',
            'customer_id' => '2',
            'payment_type'=>'Card Payment',
            'payment_amount'=>'7500',
            'profit'=>'50'
        ]);
        DB::table('orders')->insert([
            'status' => 'Processing',
            'customer_id' => '3',
            'payment_type'=>'Card Payment',
            'payment_amount'=>'200',
            'profit'=>'50'
        ]);
        DB::table('orders')->insert([
            'status' => 'Processing',
            'customer_id' => '4',
            'payment_type'=>'Card Payment',
            'payment_amount'=>'5500',
            'profit'=>'50'
        ]);
        DB::table('orders')->insert([
            'status' => 'Processing',
            'customer_id' => '5',
            'payment_type'=>'Card Payment',
            'payment_amount'=>'4500',
            'profit'=>'50'
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
            'customer_id' =>'1'
        ]);
        DB::table('order_products')->insert([
            'order_id' => '1',
            'product_id' => '2',
            'quantity' => '10',
            'customer_id' =>'1'
        ]);
        DB::table('order_products')->insert([
            'order_id' => '1',
            'product_id' => '3',
            'quantity' => '5',
            'customer_id' =>'1'
        ]);
        DB::table('order_products')->insert([
            'order_id' => '1',
            'product_id' => '4',
            'quantity' => '5',
            'customer_id' =>'1'
        ]);


    }
}
