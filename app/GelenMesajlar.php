<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GelenMesajlar extends Model
{
    //
    protected $fillable=['user_id','name','surname','email','message','status','silme','cevap'];
}
