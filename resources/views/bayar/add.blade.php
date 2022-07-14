@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Tambah Data</h3>
            <hr>
            <form method="POST" action="{{url('/bayar')}}">
                @csrf
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <select name="nama" class="form-control col-4">
                        <option selected>Pilih Pelanggan</option>
                        <option>==========================</option>
                        @foreach($data as $x)
                        <option value="{{$x->nama}}">{{$x->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kendaraan</label>
                    <select name="tarif" class="form-control col-4">
                        <option selected>Pilih Jenis Kendaraan</option>
                        <option>==========================</option>
                        @foreach($data1 as $y)
                        <option value="{{$y->id}}">{{$y->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Kendaraan</label>
                    <input type="text" class="form-control col-1" name="jumlah">
                </div>
                <button type="submit" class="btn" style="background-color: #0088e0; color:white;">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection