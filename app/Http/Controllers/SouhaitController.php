<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Souhait;
use App\Http\Controllers;

class SouhaitController extends Controller
{
    public function addItem(Request $request)
    {
        $request->validate([
            'souhait_name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $user->salary_goal -= $request->price;
        $user->save();

        $wishlist = new Souhait($request->all());
        $user->wishlists()->save($wishlist);

        return redirect()->back()->with('success', 'Item added to wishlist.');
    }

    public function index()
    {
        $wishlist = Souhait::where('user_id', Auth::id())->get();
        return view('user/souhait', compact('wishlist'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'souhait_name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
        

        Souhait::create([
            'user_id' => Auth::id(),
            'souhait_name' => $request->souhait_name,
            'price'=> $request->price,
        ]);

        return redirect()->back()->with('success', 'Produit ajouté à votre wishlist');
    }
    public function destroy(Request $request)
    {
        Souhait::where('user_id', Auth::id())
            ->where('souhait_name', $request->souhait_name)
            ->delete();

        return redirect()->back()->with('success', 'Produit retiré de votre wishlist');
    }
}

