<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameEn', 'nameBn', 'gender', 'blood', 'dob', 'district', 'present_address', 'mobile', 'fb_link',  'ju_batch', 'iit_batch', 'hall', 'ac_session', 'degree_obt', 'email', 'password', 'occupation', 'designation', 'organization', 'address_org'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function payment(){
        return $this->hasOne(Payment::class);
    }


}
