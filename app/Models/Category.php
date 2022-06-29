<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /** Pour eviter le massAssignment Exception  et ainsi plus besoin de la proprieter "fillable"*/
    protected $fillable = ['name'];
}
