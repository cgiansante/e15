<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angle extends Model
{
    use HasFactory;
    public function species()
    {
        # Define a one-to-many relationship.
        return $this->belongsTo('App\Models\Specie');
    }
}