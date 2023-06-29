<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     // 取得對應得CartItem
     public function cartItems() {
        return $this->hasMany(CartItem::class);
    }
}
