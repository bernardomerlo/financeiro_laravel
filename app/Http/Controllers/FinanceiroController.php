<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function entrar()
    {
        return view('entrar');
    }
}
