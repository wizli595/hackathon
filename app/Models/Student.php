<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class Student extends Model
{
    use HasFactory,HasRoles;
    protected $fillable = [
        "username","user_id"
    ] ;
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function teachers(): HasMany{
        return $this->hasMany(Teacher::class); 

    }
    public function repository(): HasMany{
        return $this->hasMany(Repository::class);
    }
}
