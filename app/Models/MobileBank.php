<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileBank extends Model
{
    use HasFactory;

    protected $table = 'mobile_banks';

    protected $fillable = ['name', 'number', 'owner_id'];
}
