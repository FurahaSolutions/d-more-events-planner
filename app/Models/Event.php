<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 * @method static where(string $string, string $name)
 */
class Event extends Model
{
    protected $fillable = ['name'];
    use HasFactory;
}
