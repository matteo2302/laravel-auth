<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'date', 'last_update', 'description', 'image'];
    public function image(): Attribute
    {
        return Attribute::make(get: fn ($value) => asset('storage/' . $value));
    }
};
