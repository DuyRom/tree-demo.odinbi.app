<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepository extends BaseRepository
{
    public function getModelClass()
    {
        return Product::class;
    }
}
