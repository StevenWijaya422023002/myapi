<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $table = 'books';
    protected $fillabel = [
        'title',
        'author',
        'publisher',
        'publication_year',
        'cover',
        'description',
        'price',
        'created_at',
        'created_by',
        'update_at',
        'update_by',
        'deleted_at',
        'deleted_by'

    ];

    public function data_adder(){
        return $this ->belongsTo(User::class, 'created_by', 'id');
    }
    
}
