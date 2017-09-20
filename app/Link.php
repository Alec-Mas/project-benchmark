<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = array('email', 'code_id');

    public function projects()
    {
        return $this->hasMany('App\Project', 'code_id');
    }
}
