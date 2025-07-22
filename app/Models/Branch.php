<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $fillable = [
        'id',
        'name',
        'province',
        'district',
    ];
    public $timestamps = false;
}
