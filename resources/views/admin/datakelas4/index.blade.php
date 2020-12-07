@extends('admin.layout.master')

@section('content')
<style>
    .card-header .btn {
        margin-left: 130vh;
        margin-top: -25px;
    }
</style>
<div class="container-fluid">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$pagename}}</h6>
                            <a href="{{route('datakelas4.create')}}" class="btn btn-primary btn-icon-split"><span class="text">Tambah Data</span></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Agama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i=>$row)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$row->nama}}</td>
                                            <td>{{$row->kelas}}</td>
                                            <td>{{$row->agama}}</td>
                                            <td>{{$row->kelamin}}</td>
                                            <td><a href="{{route('datakelas4.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td><form action="{{route('datakelas4.destroy',$row->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                </form></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>


@endsection('content')