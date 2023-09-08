<?php

namespace App\Models;

use App\Models\ouvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metier extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom', 'domaine','image'
    ];
    public function ouvriers(){
        return $this->belongsToMany(ouvrier::class);
    }
    
}
