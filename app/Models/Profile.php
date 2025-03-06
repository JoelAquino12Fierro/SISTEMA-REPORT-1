<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    use HasFactory;
    
    protected $table = 'users_profile';

    protected $fillable = [
        'user_id',
        'last_pat',
        'date_of_birth',
        'phone',
        'is_external'
        ];
}
