<?php

namespace App\Models;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{   
    use Sortable;

protected $fillable = [ 'Prix' ];

protected $table="vols";

public $Sortable = ['Prix']; 
    use HasFactory;

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'vol_clients');
    }


}
