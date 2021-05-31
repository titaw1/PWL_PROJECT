@extends('layouts.MasterView')
@section('menu_supplier', 'active')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Show Detail Supplier</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('supplier.index') }}">Supplier</a></li>
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
			<label for="kode" class="col-sm-12 col-md-2 col-form-label text-white">Kode Supplier</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="kode" id="kode"
                value="{{ $supplier->kode }}" aria-describedby="kode" placeholder="Disabled input" disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label for="nama" class="col-sm-12 col-md-2 col-form-label text-white">Nama Supplier</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="nama" id="nama"
                value="{{ $supplier->nama }}" aria-describedby="nama" placeholder="Disabled input" disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label for="alamat" class="col-sm-12 col-md-2 col-form-label text-white">Alamat</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="alamat" id="alamat"
                value="{{ $supplier->alamat }}" aria-describedby="alamat" placeholder="Disabled input" disabled="">
			</div>
		</div>
        <div class="form-group row">
			<label for="telp" class="col-sm-12 col-md-2 col-form-label text-white">Telepon</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="telp" id="telp"
                value="{{ $supplier->telp }}" aria-describedby="telp" placeholder="Disabled input" disabled="">
			</div>
		</div>
        <div class="form-group row">
			<label for="kota" class="col-sm-12 col-md-2 col-form-label text-white">Kota</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="kota" id="kota"
                value="{{ $supplier->kota }}" aria-describedby="kota" placeholder="Disabled input" disabled="">
			</div>
		</div>
        <div class="form-group row">
			<label for="penyedia" class="col-sm-12 col-md-2 col-form-label text-white">Penyedia Barang</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="penyedia" id="penyedia"
                value="{{ $supplier->penyedia }}" aria-describedby="penyedia" placeholder="Disabled input" disabled="">
			</div>
		</div>
    </form>
</div>
@endsection
