<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class OrderCategoryAmenities extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = "order_category_amenities";

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = ['order_category_id', 'name', 'info'];

    public function orderCategory()
    {
        return $this->belongsTo(OrderCategory::class, 'order_category_id');
    }
}
