<?php

namespace App\Models;

use App\Models\ouvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OuvierRealisation extends Model
{
    use HasFactory;
    protected $fillable=[
        'ouvrier_id',
        'description',
        'image'
    ];

    public function ouvrier(){
        return $this->belongsTo(ouvrier::class);
    }
}
