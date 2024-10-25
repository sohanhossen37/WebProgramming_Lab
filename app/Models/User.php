<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany; // Import HasMany
 // Import Booking model

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function serviceProvider()
    {
        return $this->hasOne(ServiceProvider::class, 'user_id');
    }
    protected $table = 'users'; // If the table name is users, you don't need this line.
    protected $primaryKey = 'user_id'; // Set the primary key if it's not 'id'

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'phone', 'address', 'location_id'];

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
    ];

    /**
     * Get the bookings for the user.
     *
     * @return HasMany
     */
   
}
