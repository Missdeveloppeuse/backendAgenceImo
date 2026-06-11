<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BienController extends Controller
{
    // ================= AFFICHER TOUS LES BIENS =================
    public function index()
    {
        $biens = Bien::latest()->get()->map(function ($bien) {

            return [
                'id' => $bien->id,
                'titre' => $bien->titre,
                'description' => $bien->description,
                'prix' => $bien->prix,
                'type' => $bien->type,
                'statut' => $bien->statut,
                'nombre_chambre' => $bien->nombre_chambre,
                'nombre_sallebain' => $bien->nombre_sallebain,
                'image' => asset('storage/' . $bien->image),
                'created_at' => $bien->created_at,
                'updated_at' => $bien->updated_at,
            ];
        });

        return response()->json($biens);
    }
public function store(Request $request)
{
    try {

        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'prix' => 'required|integer',
            'type' => 'required',
            'statut' => 'required',
            'nombre_chambre' => 'required|integer',
            'nombre_sallebain' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // ✅ image nullable SAFE
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('biens', 'public');
        }

        $bien = Bien::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'prix' => $request->prix,
            'type' => $request->type,
            'statut' => $request->statut,
            'nombre_chambre' => $request->nombre_chambre,
            'nombre_sallebain' => $request->nombre_sallebain,
            'image' => $imagePath,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Bien créé avec succès',
            'data' => $bien
        ], 201);

    } catch (\Exception $e) {

        return response()->json([
            'status' => false,
            'message' => 'Erreur lors de la création',
            'error' => $e->getMessage()
        ], 500);
    }
}

    // ================= AFFICHER UN BIEN =================
    public function show($id)
    {
        $bien = Bien::find($id);

        if (!$bien) {

            return response()->json([
                'message' => 'Bien introuvable'
            ], 404);
        }

        return response()->json([
            'id' => $bien->id,
            'titre' => $bien->titre,
            'description' => $bien->description,
            'prix' => $bien->prix,
            'type' => $bien->type,
            'statut' => $bien->statut,
            'nombre_chambre' => $bien->nombre_chambre,
            'nombre_sallebain' => $bien->nombre_sallebain,
            'image' => asset('storage/' . $bien->image),
            'created_at' => $bien->created_at,
            'updated_at' => $bien->updated_at,
        ]);
    }

    // ================= MODIFIER UN BIEN =================
    public function update(Request $request, $id)
    {
        $bien = Bien::find($id);

        if (!$bien) {

            return response()->json([
                'message' => 'Bien introuvable'
            ], 404);
        }

        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'prix' => 'required|integer',
            'type' => 'required',
            'statut' => 'required',
            'nombre_chambre' => 'required|integer',
            'nombre_sallebain' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // update image
        if ($request->hasFile('image')) {

            // supprimer ancienne image
            if ($bien->image && Storage::disk('public')->exists($bien->image)) {

                Storage::disk('public')->delete($bien->image);
            }

            // nouvelle image
            $imagePath = $request->file('image')->store('biens', 'public');

            $bien->image = $imagePath;
        }

        // update données
        $bien->titre = $request->titre;
        $bien->description = $request->description;
        $bien->prix = $request->prix;
        $bien->type = $request->type;
        $bien->statut = $request->statut;
        $bien->nombre_chambre = $request->nombre_chambre;
        $bien->nombre_sallebain = $request->nombre_sallebain;

        $bien->save();

        return response()->json([
            'id' => $bien->id,
            'titre' => $bien->titre,
            'description' => $bien->description,
            'prix' => $bien->prix,
            'type' => $bien->type,
            'statut' => $bien->statut,
            'nombre_chambre' => $bien->nombre_chambre,
            'nombre_sallebain' => $bien->nombre_sallebain,
            'image' => asset('storage/' . $bien->image),
            'created_at' => $bien->created_at,
            'updated_at' => $bien->updated_at,
        ]);
    }

    // ================= SUPPRIMER UN BIEN =================
    public function destroy($id)
    {
        $bien = Bien::find($id);

        if (!$bien) {

            return response()->json([
                'message' => 'Bien introuvable'
            ], 404);
        }

        // supprimer image
        if ($bien->image && Storage::disk('public')->exists($bien->image)) {

            Storage::disk('public')->delete($bien->image);
        }

        $bien->delete();

        return response()->json([
            'message' => 'Bien supprimé avec succès'
        ]);
    }
}