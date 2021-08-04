<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_formation';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'niveau',
        'description',
        'date_debut_formation',
        'duree_formation',
        'prix',
        'image_formation',
        'course',
    ];

}
