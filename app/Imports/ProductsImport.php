<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Str;

class ProductsImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Find or create category
        $category = null;
        if (!empty($row['category'])) {
            $category = Category::firstOrCreate(
                ['name' => $row['category']],
                [
                    'slug' => Str::slug($row['category']),
                    'status' => true,
                ]
            );
        }

        // Handle images - can be comma-separated
        $images = [];
        if (!empty($row['images'])) {
            $images = array_map('trim', explode(',', $row['images']));
        }

        // Handle specifications - can be JSON string or key-value pairs
        $specifications = [];
        if (!empty($row['specifications'])) {
            if (is_string($row['specifications'])) {
                $decoded = json_decode($row['specifications'], true);
                $specifications = $decoded ?: [];
            }
        }

        // Generate SKU if not provided
        $sku = !empty($row['sku']) ? $row['sku'] : 'SKU-' . strtoupper(Str::random(8));

        return new Product([
            'category_id' => $category?->id,
            'name' => $row['name'] ?? '',
            'sku' => $sku,
            'slug' => !empty($row['slug']) ? $row['slug'] : Str::slug($row['name'] ?? 'product-' . time()),
            'short_description' => $row['short_description'] ?? null,
            'description' => $row['description'] ?? null,
            'price' => $row['price'] ?? 0,
            'sale_price' => !empty($row['sale_price']) ? $row['sale_price'] : null,
            'main_image' => !empty($images) ? $images[0] : null,
            'images' => $images,
            'specifications' => $specifications,
            'features' => $row['features'] ?? null,
            'stock_quantity' => $row['stock_quantity'] ?? 0,
            'in_stock' => isset($row['in_stock']) ? (bool)$row['in_stock'] : true,
            'is_featured' => isset($row['is_featured']) ? (bool)$row['is_featured'] : false,
            'status' => isset($row['status']) ? (bool)$row['status'] : true,
            'meta_title' => $row['meta_title'] ?? null,
            'meta_description' => $row['meta_description'] ?? null,
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0',
        ];
    }
}

