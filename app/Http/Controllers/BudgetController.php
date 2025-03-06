<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Expense;
use App\Models\Categorie;
use App\Models\Goal;
use App\Models\Souhait;
use App\Models\User;
use Carbon\Carbon;

class BudgetController extends Controller
{
    public function getBudgetSummary()
    {
        $user = Auth::user();
        $totalExpenses = $user->expenses()->sum('amount');
        $totalGoals = $user->goals()->sum('amount');
        $totalSouhait = $user->wishlists()->sum('price');
        $remainingBudget = $user->budget;
        $salaryGoal = max(0, $remainingBudget - $totalGoals);
        $jour=Carbon::parse($user->date_credit)->day;

        return view('user.budget_summary', compact('totalExpenses', 'remainingBudget', 'totalGoals', 'salaryGoal','totalSouhait','jour'));
    }

}
