<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Shop\Service\ShopService;

class ShopController extends Controller
{
    public function __construct(
        private ShopService $shopService
    ){}

    public function shopList()
    {
        $request = request()->all();
        $cityShortName = $request['short_name'] ?? null;

        $shops = $this->shopService->retrieveShopByCity($cityShortName);

        return response()->json($shops);
    }


    public function shopDetails(Shop $shop)
    {
        return response()->json($shop->shopDetail());
    }
}
