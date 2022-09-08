<?php

namespace App\Models;

use App\Enums\BannerTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'type' => BannerTypes::class,
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get all of the banner's media.
     */
    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }
}