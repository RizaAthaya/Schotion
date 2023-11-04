<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Peran extends Model
{
    use HasUlids;

    protected $fillable = [
        'nama',
    ];
}
