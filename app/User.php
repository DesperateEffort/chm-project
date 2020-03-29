<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fir_name', 'mid_name', 'last_name', 'suffix_name', 'location', 'contact', 'age', 'gender', 'profession', 'email', 'password', 
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function UserSubscription(){
      return $this->hasOne(UserSubscription::class);
    }
    public function VideoType(){
      return $this->hasOne(VideoType::class);
    }
    public function VideoSubType(){
      return $this->hasOne(VideoSubType::class);
    }
    public function Video(){
      return $this->HasMany(Video::class);
    }
}
