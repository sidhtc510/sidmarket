<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Product([
            'id_postavschika' => $row['id_postavschika'],
            'title' => $row['title'],
            // 'slug' => $row['slug'],
            'category_id' => $row['category_id'],
            'price' => $row['price'],
            'price_new' => $row['price_new'] ?? 0,
            'description_short' => $row['description_short'],
            'description' => $row['description'],
            // 'brand_id' => $row['brand_id'],
            'image_main' => $row['image_main']  ?? 'no_image.svg',
            'keywords' => $row['keywords'],
            // 'status' => $row['status'],
            // 'newest' => $row['newest'],
            // 'hit' => $row['hit'],
            // 'related_product' => $row['related_product'],
        ]);
    }
}


// 'id' => $row[0],
