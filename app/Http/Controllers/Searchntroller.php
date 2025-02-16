<?php

namespace App\Http\Controllers;

use App\Models\Poscode;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Searchntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect('/')->with('error', 'Masukkan pencarian');
        }

        $results = Poscode::where('province_id', 'LIKE', "%$query%")
        ->orWhere('kota', 'LIKE', "%$query%" )
        ->orWhere('kecamatan', 'LIKE', "%$query%" )
        ->orWhere('desa', 'LIKE', "%$query%" )
        ->orWhere('kode_wilayah', 'LIKE', "%$query%" )
        ->paginate(25);

        return view('main', compact('results', 'query'));
    }
}
