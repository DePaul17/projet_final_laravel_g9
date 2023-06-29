<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'projet_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'projet_id');
    }

}


