<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $model = 'catalogs';

    protected $fillable = [
        'name', 
        'permission_id',
        'owner_id'

    ];

}
