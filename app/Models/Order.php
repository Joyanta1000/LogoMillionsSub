<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Order extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia, Notifiable;

    protected $table = "orders";

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = ['order_category_id', 'name', 'email', 'phone', 'msg'];

    public function orderCategory()
    {
        return $this->belongsTo(OrderCategory::class, 'order_category_id');
    }
}