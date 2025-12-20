<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;

class ImportProductsSpreadsheet extends Command
{
    protected $signature = 'import:products';
    protected $description = 'Import products using PhpSpreadsheet with auto image detection';

    // Permanent file path
    protected string $filePath = 'products.xlsx';

    public function handle()
    {
        $file = public_path($this->filePath);

        if (!file_exists($file)) {
            $this->error("File not found: {$file}");
            return Command::FAILURE;
        }

        $this->info('Reading Excel file...');

        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray(null, true, true, true);

        if (count($rows) < 2) {
            $this->error('Excel file is empty.');
            return Command::FAILURE;
        }

        // Header row
        $headerRow = array_shift($rows);
        $headers = array_map(fn ($h) => Str::slug(trim($h), '_'), $headerRow);

        $count = 0;

        foreach ($rows as $row) {

            $data = array_combine($headers, array_values($row));

            if (empty($data['name'])) {
                continue;
            }

            /* ================= CATEGORY ================= */
            $categoryId = null;
            if (!empty($data['category'])) {
                $category = Category::firstOrCreate(
                    ['name' => trim($data['category'])],
                    [
                        'slug'   => Str::slug($data['category']),
                        'status' => true,
                    ]
                );
                $categoryId = $category->id;
            }

            /* ================= IMAGES FROM EXCEL ================= */
            // $images = [];

            // if (!empty($data['images'])) {
            //     $imageArray = array_map('trim', explode(',', $data['images']));
            //     foreach ($imageArray as $img) {
            //         if (!$img) continue;
            //         $clean = str_replace(' ', '', basename($img));
            //         $images[] = '/images/' . $clean;
            //     }
            // }

            /* ================= AUTO IMAGE DETECTION ================= */
            if (1==1) {
                $autoImages = $this->findImagesByProductName($data['name']);

                if (!empty($autoImages)) {
                    $images = $autoImages;
                    $this->info("Auto images detected for: {$data['name']}");
                }else{
                    $images = [];
                }
            }

            $images = array_values(array_unique($images));
            $mainImage = $images[0] ?? null;

            /* ================= SPECIFICATIONS ================= */
            $specifications = [];
            if (!empty($data['specifications'])) {
                $decoded = json_decode($data['specifications'], true);
                if (is_array($decoded)) {
                    $specifications = $decoded;
                }
            }

            /* ================= INSERT PRODUCT ================= */
            Product::create([
                'category_id'       => $categoryId,
                'name'              => $data['name'],
                'sku'               => $data['sku'] ?? 'SKU-' . strtoupper(Str::random(8)),
                'slug'              => $data['slug'] ?? Str::slug($data['name']),
                'short_description' => $data['short_description'] ?? null,
                'description'       => $data['description'] ?? null,
                'price'             => (float) ($data['price'] ?? 0),
                'sale_price'        => $data['sale_price'] ?: null,
                'main_image'        => $mainImage,
                'images'            => $images,
                'specifications'    => $specifications,
                'features'          => $data['features'] ?? null,
                'stock_quantity'    => (int) ($data['stock_quantity'] ?? 0),
                'in_stock'          => isset($data['in_stock']) ? (bool) $data['in_stock'] : true,
                'is_featured'       => isset($data['is_featured']) ? (bool) $data['is_featured'] : false,
                'status'            => isset($data['status']) ? (bool) $data['status'] : true,
                'meta_title'        => $data['meta_title'] ?? null,
                'meta_description'  => $data['meta_description'] ?? null,
            ]);

            $count++;
        }

        $this->info("Import completed successfully. {$count} products inserted.");
        return Command::SUCCESS;
    }

    /**
     * Auto-detect images from /public/images using product name
     * Supports CAPS / lowercase / mixed / spaces / underscores
     */
    private function findImagesByProductName(string $productName): array
    {
        $imagesDir = public_path('images');

        if (!is_dir($imagesDir)) {
            return [];
        }

        // Normalize product name
        // Electric Bain Marie Table Top 4 Pans
        // → electric_bain_marie_table_top_4_pans
        $needle = Str::slug($productName, '_');

        $matched = [];

        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($imagesDir, \FilesystemIterator::SKIP_DOTS)
        );

        foreach ($iterator as $file) {

            if (!$file->isFile()) {
                continue;
            }

            $ext = strtolower($file->getExtension());
            if (!in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
                continue;
            }

            // Normalize filename (CAPS safe)
            $filename = strtolower($file->getFilename());
            $filename = str_replace([' ', '-'], '_', $filename);

            if (str_contains($filename, $needle)) {

                $relativePath = str_replace(public_path(), '', $file->getPathname());
                $relativePath = str_replace('\\', '/', $relativePath);

                $matched[] = $relativePath;
            }
        }

        return array_values(array_unique($matched));
    }
}
