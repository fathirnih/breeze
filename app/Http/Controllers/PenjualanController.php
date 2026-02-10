<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Penjualan;

class PenjualanController extends Controller
{


public function index()
{
    $penjualan = Penjualan::all();

    $grandTotal = 0;

    foreach ($penjualan as $p) {
        if ($p->barang) {
            $grandTotal += $p->barang->harga * $p->jumlah;
        }
    }

    return view('penjualan.index', compact('penjualan','grandTotal'));
}

public function create()
{
    $barang = Barang::all();
    return view('penjualan.create', compact('barang'));
}

public function store(Request $request)
{
    $request->validate([
        'barang_id' => 'required|exists:barang,id_barang',
        'jumlah' => 'required|integer|min:1',
    ]);

    $barang = Barang::findOrFail($request->barang_id);

    Penjualan::create([
        'barang_id'    => $barang->id_barang,
        'kode_barang'  => $barang->kode_barang,
        'nama_barang'  => $barang->nama_barang,
        'harga'        => $barang->harga,
        'jumlah'       => $request->jumlah,
    ]);

    return redirect()->route('penjualan.index')
        ->with('success', 'Data penjualan berhasil ditambahkan');
}

public function show($id)
{
    // Bisa redirect saja ke index
    return redirect()->route('penjualan.index');
}

public function cetak()
{
    $penjualan = Penjualan::with('barang')->get();

    $grandTotal = 0;
    foreach ($penjualan as $p) {
        if ($p->barang) {
            $grandTotal += $p->barang->harga * $p->jumlah;
        }
    }

    return view('penjualan.cetak', compact('penjualan', 'grandTotal'));
}



}
