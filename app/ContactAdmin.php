<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactAdmin extends Model
{
    //
    protected $fillable = ['merkez_adresi','fabrika_adresi','musteri_hatti','telefon_hatti','whatsapp','email','acilis','kapanis'];
}
