<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Interact with the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d/m/Y'),
        );
    }

    /**
     * Get all of the banner's media.
     */
    public function media()
    {
        return $this->morphToMany(Media::class, 'mediable');
    }

    /**
     * Get the event's gallery.
     */
    public function gallery()
    {
        return $this->morphOne(Gallery::class, 'gallerieable');
    }
}