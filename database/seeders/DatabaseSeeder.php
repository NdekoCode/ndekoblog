<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(10)->create();
        // La methode "each()" va nous permettre de passer un callback pour chaque utilisateur créer
        User::factory(15)->create()->each(function ($user) use ($categories) {
            // On créer un ou 3 posts aui seront lier à l'utilisateur en cours
            Post::factory(rand(1, 3))->create([
                "user_id" => $user->id,
                // On recupère de manière aléatoire les catégories et on prend la premiere puis on recupere son id
                "category_id" => ($categories->random(1)->first())->id
            ]);
        });
    }
}
