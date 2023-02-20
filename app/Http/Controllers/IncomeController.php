<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index(Request $request)
    {
        return view('income.dashboard.index');
    }
}
