<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
{
    use HasFactory;
    use SoftDeletes;
    // 白名單
    // protected $fillable = ['quantity'];
    // 黑名單不能變更
    protected $guarded = [''];
    // 隱藏顯示
    // protected $hidden = ['updated_at,created_at'];

    // 添加自訂屬性
    protected $appends = ['current_price'];

    public function getCurrentPriceAttribute()
    {
        return $this->quantity * 10;
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function cart() {
        return $this->belongsTo(Cart::class);
    }
}
