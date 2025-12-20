<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class GenerateProductTemplate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:generate-template';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Excel template file for product import';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating Excel template...');

        // Create data array
        $data = [
            [
                'name' => 'Electric Oven Single Deck Two Tray',
                'category' => 'Commercial Ovens',
                'sku' => 'OVE0102',
                'slug' => 'electric-oven-single-deck-two-tray',
                'short_description' => 'A single deck two tray electric oven with glass door',
                'description' => 'Perfect equipment for restaurants and bakeries. Features digital display and temperature control.',
                'price' => 52000,
                'sale_price' => 40000,
                'images' => '/images/OVE0102.png,/images/OVE0102_2.png,/images/OVE0102_3.jpg',
                'specifications' => '{"Material": "Stainless Steel", "Dimensions": "24x18x12 inches", "Power": "3.5 kW", "Temperature Range": "50-300°C"}',
                'features' => "Digital temperature control\nGlass door for visibility\nStainless steel construction\nEnergy efficient",
                'stock_quantity' => 10,
                'in_stock' => 1,
                'is_featured' => 1,
                'status' => 1,
                'meta_title' => 'Electric Oven Single Deck Two Tray - Commercial Grade',
                'meta_description' => 'High-quality commercial electric oven perfect for restaurants and bakeries'
            ],
            [
                'name' => 'Stainless Steel Work Table Plain',
                'category' => 'Work Tables',
                'sku' => 'WT001',
                'slug' => 'stainless-steel-work-table-plain',
                'short_description' => 'Heavy-duty stainless steel work table for commercial kitchens',
                'description' => 'Ideal for food prep cutting and general kitchen operations. Made from premium SS 304 material.',
                'price' => 25000,
                'sale_price' => 22000,
                'images' => '/images/work-table-1.jpg,/images/work-table-2.jpg',
                'specifications' => '{"Material": "SS 304", "Finish": "Matt", "Usage": "Commercial", "Dimensions": "72x30x36 inches"}',
                'features' => "Stainless steel construction\nEasy to clean\nHeavy-duty design\nCorrosion resistant",
                'stock_quantity' => 15,
                'in_stock' => 1,
                'is_featured' => 1,
                'status' => 1,
                'meta_title' => 'Stainless Steel Work Table - Commercial Grade',
                'meta_description' => 'Professional grade stainless steel work table for commercial kitchens'
            ],
        ];

        // Convert to Excel format
        Excel::create('metoraa_products', function($excel) use ($data) {
            $excel->sheet('Products', function($sheet) use ($data) {
                // Set headers
                $headers = [
                    'name', 'category', 'sku', 'slug', 'short_description', 'description',
                    'price', 'sale_price', 'images', 'specifications', 'features',
                    'stock_quantity', 'in_stock', 'is_featured', 'status',
                    'meta_title', 'meta_description'
                ];
                
                $sheet->fromArray([$headers], null, 'A1');
                $sheet->fromArray($data, null, 'A2');
            });
        })->store('xlsx', public_path());

        $this->info('Excel template created successfully at: public/metoraa_products.xlsx');
    }
}
