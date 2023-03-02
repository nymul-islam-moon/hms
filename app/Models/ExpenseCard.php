<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCard extends Model
{
    use HasFactory;

    protected $table = 'expense_cards';

    protected $fillable = ['card_id', 'currency_id', 'amount', 'date', 'expense_by_id', 'description', 'code'];

}
