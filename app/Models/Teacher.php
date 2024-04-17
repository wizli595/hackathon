<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class Teacher extends Model
{
    use HasFactory,HasRoles;
    protected $fillable = [
        'user_id',
        'name',
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function reviwes() : HasMany {
        return $this->hasMany(Review::class);
    }
}
