<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ShirtsSeeder::class);
    }
}


class ShirtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createdAt = date('Y-m-d H:i:s');
        DB::table('products')->insert(['name' => 'ILoveUA', 'description' => 'ILoveUA', 'size' => 'small', 'price' => '15,50', 'image' => 'ILoveUA.jpg', 'category_id' => '1', 'created_at' =>$createdAt,'updated_at' =>$createdAt ]);
        DB::table('products')->insert(['name' => 'KissFM', 'description' => 'KissFM', 'size' => 'medium', 'price' => '16,70', 'image' => 'KissFM.png', 'category_id' => '1', 'created_at' =>$createdAt,'updated_at' =>$createdAt ]);
    }

}
