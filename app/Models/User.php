<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, HasApiTokens;
    protected static function booted()
    {
        static::creating(function ($user) {
            $slugUserName = str_replace(' ', '-', $user->username);
            $user->avatar =
                'https://api.dicebear.com/9.x/lorelei/svg?seed=' . $slugUserName;
        });
    }

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi One to Many dengan Pesanan
    public function pesanans(): HasMany
    {
        return $this->hasMany(Pesanan::class, 'id_pesanan');
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function scopeSearch($query, $keyword)
    {
        return $query
            ->orWhere('nama', 'like', "%{$keyword}%")
            ->orWhere('email', 'like', "%{$keyword}%")
            ->orWhere('username', 'like', "%{$keyword}%");
    }

    // Method to check if the user has the 'driver' role
    public function isDriver()
    {
        return $this->hasRole('driver');
    }
}
