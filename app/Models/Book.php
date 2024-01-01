<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Policies\BookPolicy;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
            'user_id',
            'isbn',
            'title',
            'subtitle',
            'author',
            'published',
            'publisher',
            'pages',
            'description',
            'website',
    ];
    protected $policies = [
        Book::class => BookPolicy::class,
    ];
    public function books(){
        return $this->belongsTo(User::class);
    }
    
}
