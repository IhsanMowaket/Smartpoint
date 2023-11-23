<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'company',
        'phone',
        'email',
        'login_code',
        'role',
        'field',
        'is_online',
    ];

    protected $casts = [
        'is_online' => 'boolean',
    ];

    public function client()
    {
        return $this->hasOne(Client::class);
    }
    public function employee()
    {
        return $this->hasOne(Client::class);
    }
    public function routeNotificationForTwilio (){
        return $this->phone;
    }

    public function workTimeRecordings()
    {
        return $this->hasMany(WorkTimeRecording::class); // Adjust if necessary
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

}
