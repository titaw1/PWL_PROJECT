@extends('layouts.MasterView')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Create Barang</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Barang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <i class="icon-copy dw dw-add-file-1 fa-3x" aria-hidden="true"></i>
        </div>
    </div>
</div>
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
	<form method="POST" action="{{ route('barang.store') }}" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
			<label for="gambar" class="col-sm-12 col-md-2 col-form-label text-white">Gambar</label>
			<div class="col-sm-12 col-md-10">
				<input type="file" class="form-control" required="required" name="gambar"></br>
			</div>
		</div>
		<div class="form-group row">
			<label for="kode_barang" class="col-sm-12 col-md-2 col-form-label text-white">Kode Barang</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="kode_barang" id="kode_barang" aria-describedby="kode_barang" placeholder="">
			</div>
		</div>
        <div class="form-group row">
			<label for="id_kategori" class="col-sm-12 col-md-2 col-form-label text-white">Kategori</label>
                <select type="id_kategori" name="id_kategori" class="col-sm-12 col-md-10" id="id_kategori">
                    @foreach ($kategori as $kt)
                        <option option value="{{$kt->id}}">{{$kt->nama_kategori}}</option>
                    @endforeach
                </select>
		</div>
		<div class="form-group row">
			<label for="nama_barang" class="col-sm-12 col-md-2 col-form-label text-white">Nama Barang</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="nama_barang" id="nama_barang" aria-describedby="nama_barang" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="jumlah_barang" class="col-sm-12 col-md-2 col-form-label text-white">Jumlah</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="jumlah_barang" id="jumlah_barang" aria-describedby="jumlah_barang" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label"></label>
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</div>
	</form>
</div>
<!-- Default Basic Forms End -->
@endsection
