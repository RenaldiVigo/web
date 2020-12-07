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
            <form action="{{route('datakelas2.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            
            @csrf
  <div class="form-group">
    <label for="text-input">Nama Siswa</label>
    <input type="text" class="form-control" id="text-input" name="txtnama" placeholder="Masukkan Nama Siswa">
  </div>
  <div class="form-group">
    <label for="text-input">Kelas</label>
    <input type="text" class="form-control" id="text-input" name="txtkelas" placeholder="Masukkan Kelas Siswa">
  </div>
  <div class="form-group">
    <label for="text-input">Agama</label>
    <input type="text" class="form-control" id="text-input" name="txtagama" placeholder="Masukkan Agama Siswa">
  </div>
  <div class="form-group">
    <label for="text-input">Jenis Kelamin</label>
    <input type="text" class="form-control" id="text-input" name="txtkelamin" placeholder="Masukkan Jenis Kelamin Siswa">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
                            </div>
                        </div>
                    </div>
</div>

@endsection('content')