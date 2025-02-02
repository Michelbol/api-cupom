<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    /** @use HasFactory<\Database\Factories\ShopFactory> */
    use HasFactory;

    public function toArray(): array
    {
        $shop = parent::toArray();

        return [
            'id' => $shop['id'],
            'name' => $shop['name'],
            'category' => $shop['category'],
            'status' => $shop['status'],
            'phone_number' => $shop['phone_number'],
            'cuponsQtd' => $shop['cupons_count'],
            'promotionsQtd' => $shop['promotions_count'],
        ];
    }

    public function shopDetail(): array
    {
        return [
            'name' => $this->name,
            'phoneNumber' => $this->phone_number,
            'isFavorite' => false,
            'cuponsAvailables' => $this->cupons,
            'promotionsAvailables' => $this->promotions,
        ];
    }

    public function cupons(): HasMany
    {
        return $this->hasMany(Cupom::class);
    }

    public function promotions(): HasMany
    {
        return $this->hasMany(Promotion::class);
    }
}
