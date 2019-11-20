<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Personal extends Model
{
    protected $guarded = [];
//    protected $fillable =['official_id'];

    public function official(){
        return $this->belongsTo(Official::class);
    }
}
