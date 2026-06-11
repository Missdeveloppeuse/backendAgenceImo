<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthAdminController extends Controller
{

    // ================= REGISTER =================
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6'
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // creation du token
        $token = $admin->createToken('admin-token')->plainTextToken;

        return response()->json([
            'message' => 'Admin créé avec succès',
            'token' => $token,
            'admin' => $admin
        ], 201);
    }


    // ================= LOGIN =================
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        // verification email
        if (!$admin) {
            return response()->json([
                'message' => 'Email incorrect'
            ], 401);
        }

        // verification password
        if (!Hash::check($request->password, $admin->password)) {
            return response()->json([
                'message' => 'Mot de passe incorrect'
            ], 401);
        }

        // creation token
        $token = $admin->createToken('admin-token')->plainTextToken;

        return response()->json([
            'message' => 'Connexion réussie',
            'token' => $token,
            'admin' => $admin
        ]);
    }


    // ================= LOGOUT =================
    public function logout(Request $request)
    {
        // supprimer le token actuel
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Déconnexion réussie'
        ]);
    }
}