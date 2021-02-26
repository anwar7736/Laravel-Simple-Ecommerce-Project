<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
        		"name"=>"Xiaomi Redmi 9T",
        		"price"=>"15000",
        		"category"=>"Mobile",
        		"description"=>"This is a Xiaomi phone. 4GB RAM and more features.",
        		"gallery"=>"images/xiaomi_mobile.jpg",
        	],
        	[
        		"name"=>"Apple Laptop",
        		"price"=>"45000",
        		"category"=>"Laptop",
        		"description"=>"This is a Apple Laptop and more features.",
        		"gallery"=>"images/apple_laptop.jpg",
        	],
        	[
        		"name"=>"HP Laptop",
        		"price"=>"40000",
        		"category"=>"Laptop",
        		"description"=>"This is a HP Laptop and more features.",
        		"gallery"=>"images/hp_laptop.jpg",
        	],
        	[
        		"name"=>"LG Refrigerator",
        		"price"=>"25000",
        		"category"=>"Refrigerator",
        		"description"=>"This is a LG Refrigerator and more features.",
        		"gallery"=>"images/lg_fridge.jpg",
        	],
        	 [
        		"name"=>"Walton Refrigerator",
        		"price"=>"22000",
        		"category"=>"Refrigerator",
        		"description"=>"This is a Walton Refrigerator and more features.",
        		"gallery"=>"images/walton_fridge.jpg",
        	],
        	[
        		"name"=>"Sony TV",
        		"price"=>"20000",
        		"category"=>"Television",
        		"description"=>"This is a Sony Television and more features.",
        		"gallery"=>"images/sony_tv.jpg",
        	]

        ]);
    }
}
