<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sessionFormation extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'niveau',
        'description',
        'date_debut_formation',
        'duree_formation',
        'prix',
        'image_formation',
    ];
}
