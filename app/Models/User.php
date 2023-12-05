<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    protected $guarded = [

    ];

    protected $fillable = [
        'email', 'phone', 'birth_date',
        'first_name', 'last_name', 'user_name',
        'gender', 'password'
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

    public function subscriptions() : HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    /**
     * @return bool
     */
    public function haveCredits() : bool
    {
        $subscriptions = $this->subscriptions()->get();
        foreach ($subscriptions as $subscription) {
            if ($subscription->count() > 0) {
                return true;
            }
        }
        return false;
    }

}
