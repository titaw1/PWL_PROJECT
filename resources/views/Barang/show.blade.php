@extends('layouts.MasterView')
@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Show Detail Barang</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('barang.index') }}">Barang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <i class="icon-copy fa fa-info-circle fa-3x" aria-hidden="true"></i>
        </div>
    </div>
</div>
<div class="product-wrap">
    <div class="product-detail-wrap mb-30">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="pd-20 card-box height-100-p" style="padding-left: 85px">
                    <img height="300" width="300" @if($barang->gambar) src="{{ asset('storage/'.$barang->gambar) }}" @endif />
            </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="product-detail-desc pd-20 card-box height-100-p">
                    <form>
                        <div class="form-group row" style="padding-left: 90px">
                            <label for="kode_barang" class="col-sm-10 col-md-4 col-form-label text-white">Kode Barang</label>
                            <div class="col-md-6 col-sm-12">
                                <input class="form-control" type="text" name="kode_barang" id="kode_barang" value="{{ $barang->kode_barang }}" aria-describedby="kode_barang" placeholder="Disabled input" disabled="">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-left: 90px">
                            <label for="id_kategori" class="col-sm-10 col-md-4 col-form-label text-white">Kategori</label>
                            <div class="col-md-6 col-sm-12">
                                <input class="form-control" type="text" name="id_kategori" id="id_kategori" value="{{ $barang->kategori->nama_kategori }}" aria-describedby="id_kategori" placeholder="Disabled input" disabled="">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-left: 90px">
                            <label for="nama_barang" class="col-sm-10 col-md-4 col-form-label text-white">Nama Barang</label>
                            <div class="col-md-6 col-sm-12">
                                <input class="form-control" type="text" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}" aria-describedby="nama_barang" placeholder="Disabled input" disabled="">
                            </div>
                        </div>
                        <div class="form-group row" style="padding-left: 90px">
                            <label for="jumlah_barang" class="col-sm-10 col-md-4 col-form-label text-white">Jumlah</label>
                            <div class="col-md-6 col-sm-12">
                                <input class="form-control" type="text" name="jumlah_barang" id="jumlah_barang" value="{{ $barang->jumlah_barang }}" aria-describedby="jumlah_barang" placeholder="Disabled input" disabled="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
