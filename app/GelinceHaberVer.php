<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GelinceHaberVer extends Model
{
    protected $fillable = ['user_id','product_id','status'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
