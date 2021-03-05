<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transheader extends Model
{
    protected $table = 'transheader';
    protected $primarykey = 'id';

    public function users()
    {
        return $this->belongsTo(user::class);
    }

    public function details()
    {
        return $this->hasMany(transdetail::class, 'transId', 'id');
    }
}
