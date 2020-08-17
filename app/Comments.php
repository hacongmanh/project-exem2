<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function timeLine()
    {
        return $this->hasMany('App\Timeline', 'timeline_id', 'id');
    }
    public function accountComment()
    {
        return $this->belongsTo('App\Account', 'created_by', 'id');
    }
}
