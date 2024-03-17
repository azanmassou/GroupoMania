<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'email', 'status'];

    protected $guarded = [];

    protected $attributes = [
        'status' => 2,
    ];


    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function scopeStatus($query)
    {
        return $query->where('status', 1)->get();
    }
    public function getStatusAttribute($attributes)
    {

        return $this->getStatusOptions()[$attributes];
    }

    // public function getStatusOptions()
    // {
    //     return [
    //         '1' => 'Actif',
    //         '0' => "Inactif",
    //         '2' => "En Attente"
    //     ];
    // }
}
