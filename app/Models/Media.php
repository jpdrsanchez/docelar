<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the parent mediable model.
     */
    public function banners()
    {
        return $this->morphedByMany(Banner::class, 'mediable');
    }

    /**
     * Get the parent mediable model.
     */
    public function talks()
    {
        return $this->morphedByMany(Talk::class, 'mediable');
    }

    /**
     * Get the parent mediable model.
     */
    public function events()
    {
        return $this->morphedByMany(Event::class, 'mediable');
    }

    /**
     * Get the parent mediable model.
     */
    public function projects()
    {
        return $this->morphedByMany(Project::class, 'mediable');
    }

    /**
     * Get the parent mediable model.
     */
    public function galleries()
    {
        return $this->morphedByMany(Gallery::class, 'mediable');
    }
}