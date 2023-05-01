<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class OrderCategory extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = "order_categories";

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = ['name', 'icon', 'price', 'info'];

    public function orderCategoryAmenities()
    {
        return $this->hasMany(OrderCategoryAmenities::class, 'order_category_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'order_category_id');
    }

}
