<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable=[
        'titre',
        'description'
    ];
}
