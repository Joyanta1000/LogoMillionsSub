<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SliderHeading extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = "slider_headings";

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = ['name'];

    public function sliderHeadingsMenu()
    {
        return $this->hasMany(SliderHeadingsMenu::class, 'heading_id', 'id');
    }
}
