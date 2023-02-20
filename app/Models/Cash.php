<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash extends Model
{
    use HasFactory;

    protected $table = 'cashes';

    protected $fillable = ['name', 'cashed_by', 'cashed_for', 'currency', 'amount', 'date','description'];
}
