<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'dojo_id', 'user_id'];

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;

    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
