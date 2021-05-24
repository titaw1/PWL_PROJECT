@extends('layouts.MasterView')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Edit Kategori Barang</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <i class="icon-copy fa fa-pencil-square-o fa-3x" aria-hidden="true"></i>
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
	<form method="POST" action="{{ route('kategori.update', $kategori->id) }}" id="myForm">
        @csrf
        @method('PUT')
		<div class="form-group row">
			<label for="kode_kategori" class="col-sm-12 col-md-2 col-form-label text-white">Kode Kategori</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="kode_kategori" id="kode_kategori"
                value="{{ $kategori->kode_kategori }}" aria-describedby="kode_kategori" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="nama_kategori" class="col-sm-12 col-md-2 col-form-label text-white">Nama Kategori</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="nama_kategori" id="nama_kategori"
                value="{{ $kategori->nama_kategori }}" aria-describedby="nama_kategori" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="keterangan" class="col-sm-12 col-md-2 col-form-label text-white">Keterangan</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="keterangan" id="keterangan"
                value="{{ $kategori->keterangan }}" aria-describedby="keterangan" placeholder="Boleh dikosongi">
			</div>
		</div>
		{{--  <div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Email</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" value="bootstrap@example.com" type="email">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">URL</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" value="https://getbootstrap.com" type="url">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" value="1-(111)-111-1111" type="tel">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Password</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" value="password" type="password">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Number</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" value="100" type="number">
			</div>
		</div>
		<div class="form-group row">
			<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Date</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control date-picker" placeholder="Select Date" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Month</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control month-picker" placeholder="Select Month" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Time</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control time-picker" placeholder="Select time" type="text">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Select</label>
			<div class="col-sm-12 col-md-10">
				<select class="custom-select col-12">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>  --}}
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
