<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SliderHeadingsMenu extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = "slider_headings_menus";

    protected $primaryKey = "id";

    public $incrementing = true;

    protected $fillable = ['details', 'icon', 'heading_id'];

    public function sliderHeading()
    {
        return $this->belongsTo(SliderHeading::class, 'heading_id', 'id');
    }

}
