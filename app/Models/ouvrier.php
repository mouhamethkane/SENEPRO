<?php

namespace App\Models;

use App\Models\Metier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ouvrier extends Model
{
    use HasFactory;
protected $fillable = [
    'prenom',
    'nom',
    'adresse',
    'Telephone',
    'image',
];


    public function metiers(){
        return $this->belongsToMany(Metier::class);
    }
}
