<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use HasFactory;
    public function angles()
    {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->hasMany('App\Models\Angle');
    }
}