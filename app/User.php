<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone_number', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User ParcelDetails relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parcel_details(){

        return $this->hasMany(ParcelDetailsModel::class, 'user_id');
    }

    /**
     * Agent ParcelDetails Relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent(){

        return $this->hasMany(ParcelDetailsModel::class, 'agent_id');
    }
}
