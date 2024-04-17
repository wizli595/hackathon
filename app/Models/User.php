<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\RoleEnum;
class User extends Authenticatable
{
    use HasFactory, Notifiable,HasRoles;

    function student() : HasMany {
        return $this->hasMany(Student::class);
    }
    function teacher() : HasMany {
        return $this->hasMany(Teacher::class);
    }
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function isAdmin()
    {
        return $this->hasRole(RoleEnum::Admin->value);
    }

    // Check if the user is a Teacher
    public function isTeacher()
    {
        return $this->hasRole(RoleEnum::Teacher->value);
    }

    // Check if the user is a Student
    public function isStudent()
    {
        return $this->hasRole(RoleEnum::Student->value);
    }
}
