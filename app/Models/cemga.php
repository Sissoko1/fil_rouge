<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cemga extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'corps',
        'grade',
        'nom',
        'prenom',
        'email',
        'password',
        'telephone',
        'statut',
        'userId',
    ];
    public function users(){
        return $this->belongsTo(User::class, 'userId');// belongsTo= appartenir à
    }
}
