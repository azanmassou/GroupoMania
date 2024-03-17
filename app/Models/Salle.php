<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function representation()
    {
        return $this->hasMany(Representation::class);
    }
}
