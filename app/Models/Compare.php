<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compare extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'user_id'];
}
