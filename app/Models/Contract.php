<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contract extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'message',
    ];
}
