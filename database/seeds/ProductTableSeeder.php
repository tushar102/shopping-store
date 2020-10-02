<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Product::truncate();

      $products = [
          [
              'name'        => 'Men Regular Fit Solid Casual Shirt',
              'description' => 'FabTag - Deeksha',
          ],
          [
              'name'        => 'Men Regular Fit Solid Button Down Collar Casual Shirt',
              'description' => 'Asian & Fitch',
          ],
          [
              'name'        => 'Men Slim Fit Printed Casual Shirt',
              'description' => 'Levis',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
          [
              'name'        => 'Men Slim Fit Checkered Cut Away Collar Casual Shirt',
              'description' => 'U TURN',
          ],
      ];

      foreach ($products as $product) {
          Product::create($product);
      }
    }
}
