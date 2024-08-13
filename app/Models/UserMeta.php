<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','user_id','key','value','created_at'
    ];
}
