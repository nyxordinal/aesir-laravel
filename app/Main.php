<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $primaryKey = 'ain';

    /**
     * Get user that own the anime data
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
