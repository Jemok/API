<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcelDetail extends Model
{
    /**
     * The table used by this model
     * @var string
     */
    protected $model = "parcel_details";

    /**
     * Fields that can be mass assigned
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'oauth_client_id',
        'user_id',
        'agent_id'
    ];

    /**
     * User ParcelDetails relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Agent ParcelDetails Relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
