<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * Get all of the banner's media.
     */
    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }

    /**
     * Get the project's gallery.
     */
    public function gallery()
    {
        return $this->morphOne(Gallery::class, 'gallerieable');
    }
}