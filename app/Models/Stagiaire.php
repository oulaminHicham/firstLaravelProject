<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stagiaire extends Model
{
    public function groupe():BelongsTo{
        return $this->belongsTo(Groupe::class);
    }
    use HasFactory;
    public $timestaps = false ;
    protected $fillable = ['nom_complet' , 'genre' , 'date_naissance' , 'note' , 'groupe_id'];
}
