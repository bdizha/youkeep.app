<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PositionApplicant extends Model
{
    protected $guarded = [];

    /**
     * Get the position that has the application.
     */
    public function position()
    {
        return $this->belongsTo('App\Position');
    }
}
