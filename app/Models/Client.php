<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function vols()
    {
        return $this->belongsToMany(Vol::class, 'vol_clients');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
 