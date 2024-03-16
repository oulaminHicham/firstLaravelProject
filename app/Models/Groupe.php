<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Groupe extends Model
{
 
    use HasFactory;
    protected $fillable=[
        'titre',
        'description',
        'filieres_id'
    ];
    public function filiere():BelongsTo{
        return $this->belongsTo(Filiere::class);
    }
    //
}
