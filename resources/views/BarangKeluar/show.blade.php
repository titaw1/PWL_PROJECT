@extends('layouts.MasterView')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Show Detail Barang Keluar</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('BarangKeluar.index') }}">Barang Keluar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <i class="icon-copy fa fa-info-circle fa-3x" aria-hidden="true"></i>
        </div>
    </div>
</div>
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<form>
		<div class="form-group row">
			<label for="kode" class="col-sm-12 col-md-2 col-form-label text-white">Kode Out</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="kode" id="kode"
                value="{{ $keluar->kode }}" aria-describedby="kode" placeholder="Disabled input" disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label for="id_barang" class="col-sm-12 col-md-2 col-form-label text-white">Nama Barang</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="id_barang" id="id_barang"
                value="{{ $keluar->barang->nama_barang }}" aria-describedby="id_barang" placeholder="Disabled input" disabled="">
			</div>
		</div>
        <div class="form-group row">
			<label for="jumlah" class="col-sm-12 col-md-2 col-form-label text-white">Jumlah</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="number" name="jumlah" id="jumlah"
                value="{{ $keluar->jumlah }}" aria-describedby="jumlah" placeholder="Disabled input" disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label for="penanggung_jawab" class="col-sm-12 col-md-2 col-form-label text-white">Penanggung Jawab</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="penanggung_jawab" id="penanggung_jawab"
                value="{{ $keluar->penanggung_jawab }}" aria-describedby="penanggung_jawab" placeholder="Disabled input" disabled="">
			</div>
		</div>
        <div class="form-group row">
			<label for="tgl_keluar" class="col-sm-12 col-md-2 col-form-label text-white">Tgl Keluar</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="date" name="tgl_keluar" id="tgl_keluar"
                value="{{ $keluar->tgl_keluar }}" aria-describedby="tgl_keluar" placeholder="Disabled input" disabled="">
			</div>
		</div>
    </form>
</div>
@endsection
