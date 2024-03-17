<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artiste extends Model
{
    use HasFactory;

    public function spectacle()
    {
        return $this->hasMany(Spectacle::class);
    }
    
    public function representation() : BelongsToMany
    {
        return $this->BelongsToMany(Representation::class);
    }

}
