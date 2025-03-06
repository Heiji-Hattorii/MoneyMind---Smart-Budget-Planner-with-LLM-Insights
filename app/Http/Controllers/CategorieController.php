<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{

    public function index()
    {
        //
        $categories = Categorie::where('user_id', Auth::id())->get();
        return view('categories/index', compact('categories'));
    }

   
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

    public function edit(string $id)
    {
        //
        $category = Categorie::findOrFail($id);
        return view('categories.edit', compact('category'));
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
