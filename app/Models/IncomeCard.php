<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCard extends Model
{
    use HasFactory;

    protected $table = 'income_cards';

    protected $fillable = ['card_id', 'currency_id', 'amount', 'date', 'credit_for', 'credit_by', 'description', 'code'];
}
