<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderTugas extends Model
{
    //
    public $timestamps = false;

    public function user()
{
    return $this->belongsTo('App\User', 'created_by', 'id');
}
}
