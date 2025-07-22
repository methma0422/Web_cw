<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function branch(){
        return $this->belongsTo(Branch::class);
    }
    protected $table = 'books';
    protected $fillable=[
        'id',
        'title',
        'author',
        'isbn',
        'price',
        'quantity',
        'branch_id',
    ];
    public $timestamps = false;
}
