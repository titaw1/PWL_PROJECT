<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian
            $masuk = BarangMasuk::where('kode_masuk', 'like', "%" . $request->search . "%")
            ->orwhere('id_keluar', 'like', "%" . $request->search . "%")
            ->orwhere('id_barang', 'like', "%" . $request->search . "%")
            ->orwhere('jumlah_masuk', 'like', "%" . $request->search . "%")
            ->orwhere('tgl_masuk', 'like', "%" . $request->search . "%")
            ->orwhere('status', 'like', "%" . $request->search . "%")->with('BarangKeluar')
            ->paginate(5);
            return view('BarangMasuk.index', compact('masuk'))->with('i', (request()->input('page', 1) - 1) * 5);
        } else { // Pemilihan jika tidak melakukan pencarian
            //fungsi eloquent menampilkan data menggunakan pagination
            $masuk = BarangMasuk::with('BarangKeluar')->paginate(5); // Pagination menampilkan 5 data
            return view('BarangMasuk.index', compact('masuk'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $num = BarangMasuk::orderBy('kode_masuk','desc')->count();
        $dataCode = BarangMasuk::orderBy('kode_masuk','desc')->first();
        if ($num == 0) {
            $code = 'IN001';
        }
        else{
            $c = $dataCode->kode_masuk;
            $code = substr($c, 3)+1;
            $code = "IN00".$code;
        }
        $keluar = BarangKeluar::where('jumlah', '>', 0)->get();
        return view('BarangMasuk.create', compact('code', 'keluar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_masuk' => 'required',
            'id_keluar' => 'required',
            'id_barang' => 'required',
            'jumlah_masuk' => 'required',
            'tgl_masuk' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        $masuk = BarangMasuk::create($request->all());

        $masuk->barang->where('id', $masuk->id_barang)
                        ->update([
                            'jumlah_barang' => ($masuk->barang->jumlah_barang + ($masuk->jumlah_masuk)),
                        ]);

        $masuk->BarangKeluar->where('id', $masuk->id_keluar)
                        ->update([
                            'jumlah' => ($masuk->BarangKeluar->jumlah - ($masuk->jumlah_masuk)),
                        ]);

        alert()->success('Berhasil.','Data telah ditambahkan!');
        return redirect()->route('BarangMasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_masuk)
    {
        //menampilkan detail data dengan menemukan berdasarkan id BarangMasuk
        $masuk = BarangMasuk::with('BarangKeluar')->find($kode_masuk);
        return view('BarangMasuk.show', compact('masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_masuk)
    {
        $masuk = BarangMasuk::with('BarangKeluar')->find($kode_masuk);
        $keluar = BarangKeluar::all();
        return view('BarangMasuk.edit', compact('masuk', 'keluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_masuk)
    {
        $request->validate([
            'id_keluar' => 'required',
            'id_barang' => 'required',
            'jumlah_masuk' => 'required',
            'tgl_masuk' => 'required',

        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        $masuk = BarangMasuk::with('BarangKeluar')->where('kode_masuk', $kode_masuk)->first();
        $masuk->jumlah_masuk = $request->get('jumlah_masuk');
        $masuk->tgl_masuk = $request->get('tgl_masuk');
        $keluar = BarangKeluar::find($request->get('id_keluar'));
        $barang = Barang::find($request->get('id_barang'));
        //fungsi eloquent untuk menambah data dengan relasi belongsTo
        $masuk->BarangKeluar()->associate($keluar);
        $masuk->barang()->associate($barang);

        if($masuk->jumlah_masuk > $request->get('jumlah_masuk')) {
            $masuk->barang->where('id', $masuk->id_barang)
                    ->update([
                        'jumlah_barang' => ($masuk->barang->jumlah_barang - ($masuk->jumlah_barang)),
                    ]);
            $masuk->BarangKeluar->where('id', $masuk->id_keluar)
                    ->update([
                        'jumlah' => ($masuk->BarangKeluar->jumlah - ($masuk->jumlah_barang)),
                    ]);
        }else {
            $masuk->barang->where('id', $masuk->id_barang)
                    ->update([
                        'jumlah_barang' => ($masuk->barang->jumlah_barang + ($masuk->jumlah_barang)),
                    ]);
            $masuk->BarangKeluar->where('id', $masuk->id_keluar)
                    ->update([
                        'jumlah' => ($masuk->BarangKeluar->jumlah + ($masuk->jumlah_barang)),
                    ]);
        }

        $masuk->save();

        alert()->success('Berhasil.','Data telah diupdate!');
        return redirect()->route('BarangMasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_masuk)
    {
        BarangMasuk::find($kode_masuk)->delete();
        Alert::success('Success', 'Data Barang Masuk berhasil dihapus');
        return redirect()->route('BarangMasuk.index');
    }

    public function laporan()
    {
        $masuk = BarangMasuk::all();
        $pdf = PDF::loadview('BarangMasuk.laporan', compact('masuk'));
        return $pdf->stream();
    }
}
