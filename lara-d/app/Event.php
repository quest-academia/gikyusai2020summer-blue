<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name','detail','start_datetime','end_datetime','number_of_members','url'];
}
