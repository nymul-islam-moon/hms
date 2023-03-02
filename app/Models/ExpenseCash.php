<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCash extends Model
{
    use HasFactory;

    protected $table = 'expense_cashes';

    protected $fillable = ['currency_id', 'amount', 'date', 'expense_by_id', 'description', 'code'];
}
