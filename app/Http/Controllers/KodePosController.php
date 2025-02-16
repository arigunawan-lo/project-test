<?php

namespace App\Http\Controllers;

use App\Models\Poscode;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Illuminate\Routing\Controller;

class KodePosController extends Controller
{
    public function index()
    {
        $poscodes = Poscode::paginate(25);
        return view('allposts', compact('poscodes'));
    }
}
