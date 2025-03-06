<?php

namespace App\Http\Controllers;
use App\Models\Expense;

use App\Models\Categorie;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function addExpense(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'type' => 'required|in:recurring,one-time',
        ]);

        $expense = new Expense($request->all());
        auth()->user()->expenses()->save($expense);

        return redirect()->back()->with('success', 'Expense added successfully.');
    }

    public function listExpenses()
{
    $expenses = auth()->user()->expenses()->get();
    $categories = Categorie::all(); 
    return view('user.expenses', compact('expenses','categories'));
}

}

