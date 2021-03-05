<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';
    protected $primarykey= 'id';

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function shoe(){
        return $this->belongsTo(Shoe::class);
    }
}
