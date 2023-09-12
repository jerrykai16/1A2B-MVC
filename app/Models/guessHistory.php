<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guessHistory extends Model
{
    use HasFactory;
    protected $table = 'guesses';
    protected $fillable =['userID','history','updated_at'];
}
