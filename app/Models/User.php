<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];
    
    public static function boot()
    {
        parent::boot();
        date_default_timezone_set("Asia/Jakarta");
        // Create a new post
        static::creating(function ($post) {
            // $post->created_by = auth()->user()->id ?? null;
            $post->created_at = DATE("Y-m-d H:i:s");
            // $post->updated_by = auth()->user()->id ?? null;
            $post->updated_at =  DATE("Y-m-d H:i:s");
        });

        // Update an existing post
        static::updating(function ($post) {
            // $post->updated_by = auth()->user()->id ?? null;
            $post->updated_at =  DATE("Y-m-d H:i:s");
        });
    }

    public function diagnosa(){
        return $this->hasMany(Diagnosa::class, 'user_id', 'id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
