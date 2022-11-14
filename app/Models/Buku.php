<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'description', 'image', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
