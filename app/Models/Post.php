<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    const EXCERPT_LENGTH = 100;
    /** Pour eviter le massAssignment Exception  et ainsi plus besoin de la proprieter "$fillable"*/
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function excerpt()
    {
        return Str::limit($this->body, self::EXCERPT_LENGTH);
    }
}
