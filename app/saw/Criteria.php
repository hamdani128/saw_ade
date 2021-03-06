<?php

namespace App\saw;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
