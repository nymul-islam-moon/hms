<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseMobileBank extends Model
{
    use HasFactory;

    protected $table = 'expense_mobile_banks';

    protected $fillable = ['currency_id', 'amount', 'date', 'expense_by_id', 'description', 'code', 'mobile_bank_id'];
}
