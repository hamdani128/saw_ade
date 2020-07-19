<?php

namespace App\saw;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    protected $guarded = [];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class,'alternatif_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
