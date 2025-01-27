<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promotion = new Promotion();
        $promotion->name = 'Jeans Masculino em promoção';
        $promotion->description = 'Todos os Jeans Masculinos em promoção esse FDS';
        $promotion->expiration_at = now()->nextWeekendDay();
        $promotion->price = 100;
        $promotion->discount_price = 90;
        $promotion->img = 'https://linkdaloja/banner_promoção.jng';
        $promotion->shop_id = 1;
        $promotion->save();
    }
}
