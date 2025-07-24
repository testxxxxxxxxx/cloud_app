<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file';
    
    protected $fillable = [

        'name',
        'extension',
        'permission',
        'owner_id',
        'catalog_id'

    ];

}
