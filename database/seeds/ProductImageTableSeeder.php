<?php

use Illuminate\Database\Seeder;
use App\ProductImage;

class ProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::truncate();

        $productImage = [
            [
                'product_id'        => '1',
                'image' => 'https://rukminim1.flixcart.com/image/880/1056/kehfi4w0-0/shirt/y/r/m/m-af-mn-sd-31ag-asian-fitch-original-imafv5e2rmzngey9.jpeg?q=50',
            ],
            [
                'product_id'        => '2',
                'image' => 'https://rukminim1.flixcart.com/image/880/1056/kdga1zk0/shirt/s/q/d/l-af-mn-adp-str-02-asian-fitch-original-imafucyrrej2aa3b.jpeg?q=50',
            ],
            [
                'product_id'        => '3',
                'image' => 'https://rukminim1.flixcart.com/image/880/1056/k6zda4w0/shirt/y/a/c/l-vr-st152-vero-lie-original-imafpbhz7kru2qfa.jpeg?q=50',
            ],
            [
                'product_id'        => '4',
                'image' => 'https://rukminim1.flixcart.com/image/880/1056/kfoapow0-0/shirt/c/2/d/l-cm-st153-cobio-man-original-imafw2gz26hskggm.jpeg?q=50',
            ]
        ];

        foreach ($productImage as $product) {
            ProductImage::create($product);
        }
    }
}
