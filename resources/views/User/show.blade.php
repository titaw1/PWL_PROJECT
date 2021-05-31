@extends('layouts.MasterView')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Show Detail User</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <i class="icon-copy fa fa-info-circle fa-3x" aria-hidden="true"></i>
        </div>
    </div>
</div>
<div class="pd-20 card-box mb-30">
	<form>
		<div class="form-group row">
			<label for="name" class="col-sm-12 col-md-2 col-form-label text-white">Nama</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" aria-describedby="name" placeholder="Disabled input" disabled="">
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-12 col-md-2 col-form-label text-white">Email</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" aria-describedby="email" placeholder="Disabled input" disabled="">
			</div>
		</div>
        <div class="form-group row">
			<label for="gambar" class="col-sm-12 col-md-2 col-form-label text-white">Gambar</label>
			<div class="col-sm-12 col-md-10">
                <img class="product" width="250" height="250" @if($user->gambar) src="{{ asset('storage/'.$user->gambar) }}" @endif />
			</div>
		</div>
        <div class="form-group row">
			<label for="role" class="col-sm-12 col-md-2 col-form-label text-white">Role</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name="role" id="role" value="{{ $user->role }}"aria-describedby="role" placeholder="Disabled input" disabled="">
			</div>
		</div>
    </form>
</div>
@endsection
