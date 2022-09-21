<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takenote extends Model
{
    use HasFactory;

    protected $table = 'take_note';
    protected $fillable = ['title', 'note'];
    protected $guarded = [];
}
