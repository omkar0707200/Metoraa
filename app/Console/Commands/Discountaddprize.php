<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class Discountaddprize extends Command
{
    protected $signature = 'app:discountaddprize';

    protected $description = 'Add random discount and update original price';

    public function handle()
    {
        $products = Product::all();

        foreach ($products as $product) {

            $randomDis = rand(10, 20);

            // original price before discount
            $newOriginalPrice = $product->sale_price
                + ($product->sale_price * $randomDis / 100);

            $product->update([
                'price'          => round($newOriginalPrice, 2),
                'discount_percentage' => $randomDis,
            ]);
        }

        $this->info('Discount and prices updated successfully.');
    }
}
