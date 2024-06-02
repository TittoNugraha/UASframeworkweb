<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang_store', compact('barangs'));
    }

    public function input()
    {
        return view('barang_input');
    }

    public function store(Request $request)
    {
        Barang::create($request->all());
        return redirect()->route('barang_index');
    }

    public function destroy($id)
    {
        Barang::findOrFail($id)->delete();
        return redirect()->route('barang_index');
    }
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang_edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());
        return redirect()->route('barang_index');
    }
}

