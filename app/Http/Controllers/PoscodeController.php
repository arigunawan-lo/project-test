<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Poscode;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PoscodeController extends Controller
{

    
    public function index()
    {
        $provinces = Province::withCount('poscodes')->get();
        return view('home', compact('provinces'));
    }

    public function show($id)
    {
        $province = Province::findOrFail($id);

        $poscodes = Poscode::where('province_id', $id)->paginate(50);
        
        return view('province', compact('province', 'poscodes'));
    }
    
}
