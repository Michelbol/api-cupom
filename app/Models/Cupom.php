<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    protected $table = 'cupons';

    /** @use HasFactory<\Database\Factories\CupomFactory> */
    use HasFactory;


    public function toArray()
    {
        $cupom = parent::toArray();

        return [
            'id' => $cupom['id'],
            'name' => $cupom['name'],
            'description' => $cupom['description'],
            'expiration_at' => $cupom['expiration_at'],
            'qr_code' => $cupom['qr_code'],
            'img' => $cupom['img'],
        ];
    }
}
