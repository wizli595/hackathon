<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ["teacher_id","student_id","comment"];

    public function teacher() :BelongsTo{
        return $this->belongsTo(Teacher::class);
    }
}
