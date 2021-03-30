<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian nama
            $barangs = Barang::where('kode_barang', 'like', "%".$request->search."%")->paginate(5);
        } else { // Pemilihan jika tidak melakukan pencarian nama
            //fungsi eloquent menampilkan data menggunakan pagination
            $barangs = Barang::paginate(5); // Pagination menampilkan 5 data
        }
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'kd_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Barang = Barang::find($kd_barang);
        return view('barang.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_barang)
    {
        $Barang = Barang::find($kd_barang);
        return view('barang.edit', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_barang)
    {
        $request->validate([
            'id_barang' => 'required',
            'kd_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);

        Barang::find($kd_barang)->update($request->all());
            
        return redirect()->route('barang.index')->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_barang)
    {
        MahasisBarangwa::find($kd_barang)->delete();
        return redirect()->route('barang.index')-> with('success', 'Barang Berhasil Dihapus');
    }
}
