<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['user_id', 'name', 'amount', 'category_id', 'type', 'next_due_date'];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
}
