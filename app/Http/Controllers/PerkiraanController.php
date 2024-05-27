<?php

namespace App\Http\Controllers;

use App\Models\Perkiraan_model;
use Illuminate\Http\Request;

class PerkiraanController extends Controller
{

    public function index()
    {
        $perkiraan = Perkiraan_model::get();
       return view ('admin/perkiraan/index', compact('perkiraan'));
    }


    public function create()
    {
       return view ('admin/perkiraan/tambah');
    }


    public function store(Request $request)
    {
       $p = new Perkiraan_model();
       $p->nomor_perkiraan = $request->nomor_perkiraan;
       $p->nama_perkiraan = $request->nama_perkiraan;
       $p->save();
       return redirect('perkiraan'); 
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
