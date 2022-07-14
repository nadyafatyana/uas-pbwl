@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-light">
        <div class="card-body" style="background-color: #dddddd; color:black;">
            <h3>Data Tarif Kendaraan</h3>
            <hr>
            <a href="{{url('tarif/create')}}" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <table class="table table-hover">
                <thead>
                    <tr style="background-color:#4c5434;color:white;">
                        <th>Jenis Kendaraan</th>
                        <th>Harga</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                @foreach($data as $x)
                <tr>
                    <td>{{$x->nama}}</td>
                    <td>Rp. {{$x->harga}}</td>
                    <td class="text-center">
                        <form action="{{url('tarif/'.$x->id)}}" method="POST">
                            @method('delete')
                            @csrf
                            <a href="{{url('tarif/'.$x->id.'/edit')}}" class="btn btn-sm btn-warning">Ubah</a>
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection