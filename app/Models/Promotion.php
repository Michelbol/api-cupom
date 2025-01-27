<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    /** @use HasFactory<\Database\Factories\PromotionFactory> */
    use HasFactory;

    public function toArray()
    {
        $cupom = parent::toArray();

        return [
            'id' => $cupom['id'],
            'name' => $cupom['name'],
            'description' => $cupom['description'],
            'expiration_at' => $cupom['expiration_at'],
            'discount_price' => $cupom['discount_price'],
            'price' => $cupom['price'],
            'img' => $cupom['img'],
        ];
    }
}
