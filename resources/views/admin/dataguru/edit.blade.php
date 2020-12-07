@extends('admin.layout.master')

@section('content')
<style>

</style>
<div class="container-fluid">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$pagename}}</h6>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                            @if($errors->any())
            <div class="alert alert-danger">
                <div class="list-group">
                    @foreach($errors->all() as $error)
                    <li class="list-group-item">
                    {{$error}}
                    </li>
                @endforeach
                </div>
            </div>
         
         @endif
            <form action="{{route('dataguru.update', $data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @method('PATCH') 
            @csrf
  <div class="form-group">
    <label for="text-input">Nama Guru</label>
    <input type="text" class="form-control" id="text-input" name="txtguru" value="{{$data->nama_guru}}" placeholder="Masukkan Nama Guru">
  </div>
  <div class="form-group">
    <label for="text-input">Tanggal Lahir</label>
    <input type="text" class="form-control" id="text-input" name="txttanggal" value="{{$data->tanggal_lahir}}" placeholder="Masukkan Tanggal Lahir">
  </div>
  <div class="form-group">
    <label for="text-input">Jenis Kelamin</label>
    <input type="text" class="form-control" id="text-input" name="txtkelamin" value="{{$data->jenis_kelamin}}" placeholder="Masukkan Jenis Kelamin">
  </div>
  <div class="form-group">
    <label for="text-input">NIP/NUPTK</label>
    <input type="text" class="form-control" id="text-input" name="txtnip" value="{{$data->nip}}" placeholder="Masukkan No NIP">
  </div>
  <div class="form-group">
    <label for="text-input">Jabatan</label>
    <input type="text" class="form-control" id="text-input" name="txtjabatan" value="{{$data->jabatan}}" placeholder="Masukkan Jabatan">
  </div>
  <div class="form-group">
    <label for="text-input">Tanggal Mulai Bekerja</label>
    <input type="text" class="form-control" id="text-input" name="txtbekerja" value="{{$data->bekerja}}" placeholder="Masukkan Tanggal Mulai Bekerja">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
                            </div>
                        </div>
                    </div>
</div>

@endsection('content')