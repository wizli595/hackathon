<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Repository extends Model
{
    use HasFactory;
    protected $fillable = ["repo","student_id","note"];
    public function student() :BelongsTo{
        return $this->belongsTo(Student::class);
    }
}
