<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Spectacle extends Model
{
    use HasFactory;

    public function artiste(){
        return $this->belongsTo(Artiste::class);
    }

    public function representation() : BelongsToMany
    {
        return $this->BelongsToMany(Representation::class)->withTimestamps();
    }
    
}
