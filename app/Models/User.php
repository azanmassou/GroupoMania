<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $attributes = [
        'role_id' => 2,
    ];

    protected $fillable = [
        'name',
        'role_id',
        'email',
        'password',
        'is_blocked',
        'email_verified_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    }


    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the role attribute.
     *
     * @param  mixed  $value
     * @return string
     */
    // public function getRoleAttribute($value)
    // {
    //     $roles = [
    //         1 => 'admin',
    //         2 => 'user',
    //         3 => 'subscribed',
    //     ];

    //     return $roles[$value] ?? $value; // Retourne l'étiquette correspondante ou l'entier tel quel
    // }



    
}
