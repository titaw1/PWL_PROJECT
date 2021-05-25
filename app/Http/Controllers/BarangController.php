<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian
            $barang = Barang::where('kode_barang', 'like', "%" . $request->search . "%")
            ->orwhere('nama_barang', 'like', "%" . $request->search . "%")
            ->orwhere('jumlah_barang', 'like', "%" . $request->search . "%")->with('kelas')
            ->paginate(5);
            return view('Barang.index', compact('barang'))->with('i', (request()->input('page', 1) - 1) * 5);
        } else { // Pemilihan jika tidak melakukan pencarian
            //fungsi eloquent menampilkan data menggunakan pagination
            $barang = Barang::with('kategori')->get();
            $barang = Barang::paginate(5); // MenPagination menampilkan 5 data
        }
        return view('Barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('Barang.create', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'gambar' => 'required',
            'jumlah_barang' => 'required',
            'id_kategori' => 'required',
            ]);

            if ($request->file('gambar')) {
                $image_name = $request->file('gambar')->store('images', 'public');
            }

            //fungsi eloquent untuk menambah data
            Barang::create($request->all());

            $kategori = Kategori::find($request->get('id_kategori'));

            $barang = new Barang;
            $barang->kode_barang = $request->get('kode_barang');
            $barang->nama_barang = $request->get('nama_barang');
            $barang->gambar = $image_name;
            $barang->jumlah_barang = $request->get('jumlah_barang');
            $barang->id_kategori = $request->get('id_kategori');

            //fungsi eloquent untuk menambah data dengan relasi belongsTo
            $barang->kategori()->associate($kategori);
            $barang->save();

            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            Alert::success('Success', 'Data Barang Berhasil Ditambahkan');
            return redirect()->route('barang.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
