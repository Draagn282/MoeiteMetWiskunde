<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Recenties extends Model
{
    protected $table = 'Recenties';
    protected $fillable = ['Naam', 'Text', 'Goedkeuring'];
}