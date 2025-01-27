<?php

namespace App\Shop\Service;

use App\Shop\Repository\ShopRepository;
use Illuminate\Database\Eloquent\Collection;

class ShopService
{
    public function __construct(
        private readonly ShopRepository $shopRepository
    ){}


    public function retrieveShopByCity(?string $name): Collection {
        return $this->shopRepository->retrieveShopsWithQtdCuponsAndQtdPromotionsByCity($name);
    }
}
