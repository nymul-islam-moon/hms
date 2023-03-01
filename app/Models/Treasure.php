<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasure extends Model
{
    use HasFactory;

    protected $table = 'treasures';

    protected $fillable = ['user_id', 'amount', 'currency_id', 'description'];


    public function rel_to_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
