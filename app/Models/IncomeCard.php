<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCard extends Model
{
    use HasFactory;

    protected $table = 'income_cards';

    protected $fillable = ['bank_name', 'card_number', 'currency', 'amount', 'date', 'credit_for', 'credit_by', 'description'];
}
