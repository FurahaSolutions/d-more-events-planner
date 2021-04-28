<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;

    public static function aboutUs()
    {
        return self::where('content_type', 'about_us')->select('content')->get();
    }
}
