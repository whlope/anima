@extends('master')
@section('konten')
<h3>Anima - Tampil Data Mahasiswa</h3>
<a class="btn btn-success" href="{{route('tambahmahasiswa')}}"><i class="fa fa-plus"></i> Tambah Mahasiswa</a>
<table class="table table-bordered table-hover">
    <tr>
        <th>#ID</th>
        <th>Nama Mahasiswa</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No. Hp</th>
        <th>Aksi</th>
    </tr>
    @foreach($mahasiswa as $s) 
    <tr>
        <td>{{$s->id_mahasiswa}}</td>
        <td>{{$s->nm_mahasiswa}}</td>
        <td>{{$s->tmp_lahir}}</td>
        <td>{{$s->tgl_lahir}}</td>
        <td>{{$s->alamat}}</td>
        <td>{{$s->no_hp}}</td>
    <td>
        <a href="/mahasiswa/ubah/{{$s->id_mahasiswa}}" 
        class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
        <a href="/mahasiswa/hapus/{{$s->id_mahasiswa}}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
    </tr>
    @endforeach
</table>
@endsection