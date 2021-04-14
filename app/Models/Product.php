<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $guarded = [];
    protected $appends = ['image_path', 'profit_percent'];
    public function getProfitPercentAttribute()
    {
        $profit = $this->sale_price - $this->purchase_price;
        $profit_percent = $profit * 100 / $this->purchase_price;
        return number_format($profit_percent, 2);

    }
    public function getImagePathAttribute()
    {
        return asset('uploads/product_images/' . $this->image);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
