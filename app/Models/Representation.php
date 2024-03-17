<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Representation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function artiste() : BelongsToMany
    {
        return $this->BelongsToMany(Artiste::class)->withTimestamps();
    }
    public function spectacle() : BelongsToMany
    {
        return $this->BelongsToMany(Spectacle::class)->withTimestamps();
    }
    public function ticket() : BelongsToMany
    {
        return $this->BelongsToMany(Ticket::class)->withTimestamps();
    }
}
