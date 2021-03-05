<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transdetail extends Model
{
    protected $table = 'transdetail';

    public function headers()
    {
        return $this->belongsTo(transheader::class);
    }

    public function shoe()
    {
        return $this->hasMany(Shoe::class, 'id', 'shoeId');
    }
}
