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
    const EXCERPT_LENGTH = 250;
    /** Pour eviter le massAssignment Exception  et ainsi plus besoin de la proprieter "$fillable"*/
    protected $fillable = ['title', 'content', 'image'];
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
        return Str::limit($this->content, self::EXCERPT_LENGTH);
    }

    public function getTitleAttribute($attribute)
    {
        return Str::title($attribute);
    }
}
