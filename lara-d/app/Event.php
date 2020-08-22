<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'detail',
        'start_datetime',
        'end_datetime',
        'number_of_members',
        'url',
    ];

    public static function scopeFuture($query)
    {
        return $query
            ->where('start_datetime', '>=', NOW());
    }

    public static function scopeAscStartDatetime($query)
    {
        return $query
            ->orderBy('start_datetime', 'asc');
    }
}
