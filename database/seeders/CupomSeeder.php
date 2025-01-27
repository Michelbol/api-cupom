<?php

namespace Database\Seeders;

use App\Models\Cupom;
use Illuminate\Database\Seeder;

class CupomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cupom = new Cupom();
        $cupom->name = '50% Jeans';
        $cupom->description = '50% off em todos os jeans da loja';
        $cupom->expiration_at = now()->addMonths(5);
        $cupom->qr_code = 'https://linkparaoqrcode';
        $cupom->img = 'https://linkparafotodoqrcode.com';
        $cupom->shop_id = 1;
        $cupom->save();

    }
}
