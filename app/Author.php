<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //

    public function publication()
    {
        return $this->belongsTo('App\Publication');
    }
}
