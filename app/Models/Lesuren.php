<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesuren extends Model
{
    protected $table = 'Lesuren';
    protected $fillable = ['Dag', 'StartUurVanDag', 'EindUurVanDag', 'Status'];
}
