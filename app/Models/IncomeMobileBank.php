<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeMobileBank extends Model
{
    use HasFactory;

    protected $table = 'income_mobile_banks';

    protected $fillable = [ 'mobile_bank_id', 'currency_id', 'cash_in_for', 'amount', 'date', 'cash_in_by_name', 'cash_in_by_phone', 'description', 'code'];
}
