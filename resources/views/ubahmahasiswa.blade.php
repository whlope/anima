@extends('master')
@section('konten')
    <h3>Anima - Ubah Data Mahasiswa</h3>
 @foreach($mahasiswa as $s)
    <form method="post" action="{{route('updatemahasiswa')}}">
    @csrf
        <input type="hidden" name="id_mahasiswa" value="{{$s->id_mahasiswa}}">
    <div class="form-group">
        <label>
            Nama Mahasiswa
        </label>
        <input type="text" name="nm_mahasiswa" value="{{$s->nm_mahasiswa}}" class="form-control" placeholder="Nama Mahasiswa" required="">
    </div>
    <div class="form-group">
        <label>
            Tempat Lahir
        </label>
        <input type="text" name="tmp_lahir" value="{{$s->tmp_lahir}}" class="form-control" placeholder="Tempat Lahir" required="">
    </div>
    <div class="form-group">
        <label>
            Tanggal Lahir
        </label>
        <input type="date" name="tgl_lahir" value="{{$s->tgl_lahir}}" class="form-control"  placeholder="Tanggal Lahir" required="">
    </div>
    <div class="form-group">
        <label>
            Alamat
        </label>
        <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat" required="">{{$s->alamat}}
        </textarea>
    </div>
    <div class="form-group">
        <label>
            No. Hp
        </label>
        <input type="text" name="no_hp" value="{{$s->no_hp}}" class="form-control" placeholder="No. Hp" required="">
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save">
            </i> 
            Update Data
        </button>
    </div>
 </form>
 @endforeach
@endsection