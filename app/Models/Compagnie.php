<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compagnie extends Model
{
    protected $fillable = [
        'nom',
        'numero_telephone',
        'logo',
    ];

    // Vous pouvez définir des relations, des accesseurs ou des mutateurs ici
}
