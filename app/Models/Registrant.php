<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'event_id',
        'mobile',
        'workplace',
        'speciality',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
