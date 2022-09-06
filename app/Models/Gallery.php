<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    /**
     * Get the parent imageable model (user or post).
     */
    public function gallerieable()
    {
        return $this->morphTo();
    }

    /**
     * Get all of the gallery's media.
     */
    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }
}