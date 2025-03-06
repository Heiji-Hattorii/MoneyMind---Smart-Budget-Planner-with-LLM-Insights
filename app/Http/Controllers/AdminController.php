<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;


class AdminController extends Controller
{

        public function dashboard()
        {
            $totalUsers = User::count();
            $revenue = User::avg('salaire');
            return view('admin.dashboard', compact('totalUsers', 'revenue'));
        }
        
        public function cleanInactiveUsers()
        {
            User::where('last_activity', '<', Carbon::now()->subMonths(2))->delete();
            return back()->with('success', 'Comptes inactifs supprimés');
        }
    

        public function index()
        {
            $users = User::all();
            return view('admin.index', compact('users'));
        }
    
        public function show($id)
        {
            $user = User::findOrFail($id);
            return view('admin.show', compact('user'));
        }
    
        public function destroy($id)
        {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->route('admin.index');
        }
}
