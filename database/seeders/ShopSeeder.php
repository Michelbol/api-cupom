<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shop = new Shop();
        $shop->name = "Michel's SA";
        $shop->category = 'Varejo';
        $shop->status = 'active';
        $shop->phone_number = '(44) 99824-3108';
        $shop->city = 'Maringá';
        $shop->save();
    }
}
