<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // 🔐 récupère user via sanctum
        $user = $request->user();

        // ❌ pas connecté
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Non authentifié'
            ], 401);
        }

        // ❌ vérifie dans la table admins (ULTRA SAFE)
        $isAdmin = Admin::where('id', $user->id)->exists();

        if (!$isAdmin) {
            return response()->json([
                'status' => false,
                'message' => 'Accès refusé (admin seulement)'
            ], 403);
        }

        return $next($request);
    }
}