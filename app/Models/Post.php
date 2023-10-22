<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // About Page
    private static $aboutData = [
        'name' => 'Ibnu Hamid Aufa Fawwaz',
        'email' => 'aufacb124@gmail.com'
    ];
    static function about()
    {
        return self::$aboutData;
    }
}

