<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anomalies extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'anomalies';

    // Specify the fields that can be mass assigned
    protected $fillable = [
        'title',
        'author',
        'published_year',
        'genre',
    ];
}
