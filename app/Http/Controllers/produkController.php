<?php

namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //return view('data');
        //$nama = "Bambang";
        //$prodi = "Sistem Informasi";
        //return view('data', [
        //    'nama' => $nama,
        //    'nama_prodi' => $prodi,
        //]);

        $data = barang::all();
        return view('produk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('produk_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|
            max:100|unique:produk,nama_produk',
            'kategori' => 'required|string|max:50',
            'harga_satuan' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'satuan' => 'required|string|max:20'
        ]);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga_satuan' => $request->stok,
            'satuan' => $request->satuan
        ]);

        return redirect('/produk')->with('success',
        'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $produk = Produk::findOrFail($id);
        return view('produk_edit', compact('produk'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $produk = Produk::findOrFail($id);
        
         $request->validate([
            'nama_produk' => 'required|string|max:100|unique:produk,nama_produk,' 
            . $id . ',id_produk',
            'kategori'    => 'required|string|max:50',
            'harga_satuan'=> 'required|numeric|min:0',
            'stok'        => 'required|integer|min:0',
            'satuan'      => 'required|string|max:20'
        ]);

        $produk->update([
            'nama_produk'  => $request->nama_produk,
            'kategori'     => $request->kategori,
            'harga_satuan' => $request->harga_satuan,
            'stok'         => $request->stok,
            'satuan'       => $request->satuan
        ]);

        return redirect('/produk')
            ->with('success', 'Produk berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    }
}
