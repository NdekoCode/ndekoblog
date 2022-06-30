<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Si le role passer en parametre du middleware existe dans la table 'role' alors passe à la requete suivant, sinon renvois un "forbidden"
        if ($request->user()->roles()->where('name', $role)->exists()) return $next($request);
        return redirect()->route('posts.index')->with('warning', "Vous n'etes pas autorisés à effectuer cette action");
    }
}
