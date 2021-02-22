<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "title" => "porsche pazzesca",
                "description" => "questa è una porsche pazzesca",
                "quantity" => "1500"

            ],
            [
                "title" => "gold ps5",
                "description" => "una ps5 che sconcerta il mondo",
                "quantity" => "2500"

            ],
            [
                "title" => "bugatti veyron",
                "description" => "la macchina più veloce del mondo",
                "quantity" => "100"

            ],
            [
                "title" => "Roblox",
                "description" => "un robot assistente quotidiano",
                "quantity" => "15"

            ],
        ];


        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->title = $product['title'];
            $newProduct->description = $product['description'];
            $newProduct->quantity = $product['quantity'];
            $newProduct->save();
        }
    
    }
}
