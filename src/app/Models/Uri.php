<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uri extends Model
{
    use HasFactory;
      protected $primaryKey = 'hash';

      protected $fillable = [
        'original_url',
        'user_id'
    ];
}
