<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Categorie::where('user_id', Auth::id())->get();
        return view('gerercateg', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:255',
            'icone' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Categorie::create([
            'user_id' => Auth::id(),
            'nom' => $request->nom,
            'icone' => $request->icone,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'icone' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $categorie->update([
            'nom' => $request->input('nom'),
            'icone' => $request->input('icone'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès');
    }


    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès');
    }
}
