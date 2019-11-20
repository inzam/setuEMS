<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $guarded = [];
//    protected $primaryKey = 'name';
//    public $incrementing = false;
    public function personal(){
        return $this->hasOne(Personal::class);
    }
}
