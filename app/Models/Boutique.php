<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'image', 'is_reserved', 'is_accepted',
        'is_rejected',
    ];
}
