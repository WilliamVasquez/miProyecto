<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(
            [
                [
                    'productName' => 'Paginas de papel',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'productName' => 'Poco X3 PRO',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
