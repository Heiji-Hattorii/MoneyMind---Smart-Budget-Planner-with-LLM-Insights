<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    public function setGoal(Request $request)
    {
        $request->validate([
            'goal_name' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $goal = new Goal($request->all());
        auth()->user()->goals()->save($goal);

        return redirect()->back()->with('success', 'Goal set successfully.');
    }
    public function showForm()
{
    return view('user/goals');
}

}

