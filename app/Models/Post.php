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

    public static function boot()
    {
        parent::boot();
        // A la creation du post on va recuperer le "post" pour extraire ses relations
        self::creating(function ($post) {

            // dd("Creating", $post);
            // Sur la relation avec l'utilisateur enregister l'identifiant de l'utilisateur connecter
            $post->user()->associate(auth()->user()->id);
            // Sur la relation du categorie on associe la category qui se trouve dans la requete utilisateur
            $post->category()->associate(request()->category);
        });
        // A la modification du post
        self::updating(function ($post) {
            // dd("Updating", $post);
            // Sur la relation du categorie on associe la category qui se trouve dans la requete utilisateur
            $post->category()->associate(request()->category);
        });
    }
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
