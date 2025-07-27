<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    
    protected $fillable = [

        'name',
        'extension',
        'permission_id',
        'owner_id',
        'catalog_id'

    ];

}
