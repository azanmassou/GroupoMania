<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function representation() : BelongsToMany
    {
        return $this->BelongsToMany(Representation::class)->withTimestamps();
    }
}
