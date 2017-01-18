<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i= 1 ; $i <= 5 ; $i++ ) {
            DB::table('brands')->insert([
                'name' => 'brand '.$i,
                'slug' => 'brand-'.$i,
                'meta_title' => str_random(10),
                'meta_keywords' => str_random(20),
                'meta_description' => str_random(30),
                'description' => str_random(40),
                'visible' => 1,
                'created_at' => '2017-01-17 13:15:23',
                'updated_at' => '2017-01-17 13:15:23',
            ]);

            DB::table('categories')->insert([
                'name' => 'category '.$i,
                'slug' => 'category-'.$i,
                'meta_title' => str_random(10),
                'meta_keywords' => str_random(20),
                'meta_description' => str_random(30),
                'description' => str_random(40),
                'visible' => 1,
                'created_at' => '2017-01-17 13:15:23',
                'updated_at' => '2017-01-17 13:15:23',
            ]);
        }
        
        for( $i= 1 ; $i <= 3 ; $i++ ) {
            DB::table('products')->insert([
                'name' => 'product '.$i,
                'slug' => 'product-'.$i,
                'brand_id' => 1,
                'meta_title' => str_random(10),
                'meta_keywords' => str_random(20),
                'meta_description' => str_random(30),
                'description' => str_random(40),
                'price' => 1000+$i*10,
                'visible' => 1,
                'created_at' => '2017-01-17 13:15:23',
                'updated_at' => '2017-01-17 13:15:23',
            ]);

            DB::table('products')->insert([
                'name' => 'product2 '.$i,
                'slug' => 'product-2-'.$i,
                'brand_id' => 3,
                'meta_title' => str_random(10),
                'meta_keywords' => str_random(20),
                'meta_description' => str_random(30),
                'description' => str_random(40),
                'price' => 500+$i*10,
                'visible' => 1,
                'created_at' => '2017-01-17 13:15:23',
                'updated_at' => '2017-01-17 13:15:23',
            ]);
        }
        for( $i= 1 ; $i <= 4 ; $i++ ) {
            DB::table('products')->insert([
                'name' => 'product3 '.$i,
                'slug' => 'product-3-'.$i,
                'brand_id' => 2,
                'meta_title' => str_random(10),
                'meta_keywords' => str_random(20),
                'meta_description' => str_random(30),
                'description' => str_random(40),
                'price' => 2000+$i*10,
                'visible' => 1,
                'created_at' => '2017-01-17 13:15:23',
                'updated_at' => '2017-01-17 13:15:23',
            ]);
        }
        
        for( $i= 1 ; $i <= 10 ; $i++ ) {
            DB::table('products_categories')->insert([
                'product_id' => $i,
                'category_id' => 1,
            ]);
            DB::table('products_categories')->insert([
                'product_id' => $i,
                'category_id' => 2,
            ]);
            DB::table('products_categories')->insert([
                'product_id' => $i,
                'category_id' => 3,
            ]);
        }
    }
}
