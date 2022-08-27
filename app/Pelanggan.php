<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('id_user', 'App\User');
    }

}
