<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $forms = [
        [
            'name' => 'name',
            'required' => false,
            'column' => 3,
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Input Name',
            'display' => false
        ],
        [
            'name' => 'email',
            'required' => true,
            'column' => 3,
            'label' => 'Email',
            'type' => 'text',
            'placeholder' => 'Input Email',
            'display' => true
        ],
        [
            'name' => 'password',
            'required' => true,
            'column' => 6, // max 9
            'label' => 'Password',
            'type' => 'password',
            'placeholder' => 'Input Password',
            'display' => false,
        ],
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

    public function getForms()
    {
        return $this->forms;
    }
}
