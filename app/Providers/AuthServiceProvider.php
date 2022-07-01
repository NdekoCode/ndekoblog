<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // User : est le user courant, càd l'utilisateur connecté
        Gate::define('update-posts', function (User $user, Post $post) {
            // On verifie si lors de la modification du post si l'utilisateur est le createur du post
            return $user->id === $post->user_id;
        });
        // On verifie si l'utilisateur est un administrateur
        Gate::define('access-admin', function (User $user) {
            return $user->admin;
        });
    }
}
