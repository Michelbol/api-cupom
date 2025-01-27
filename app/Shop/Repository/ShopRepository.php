<?php

namespace App\Shop\Repository;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Collection;

class ShopRepository
{
    public function retrieveShopsWithQtdCuponsAndQtdPromotionsByCity(?string $city): Collection {
        return Shop
            ::where('city', 'like', '%' .$city . '%')
            ->withCount(['cupons', 'promotions'])
            ->get();
    }
}
