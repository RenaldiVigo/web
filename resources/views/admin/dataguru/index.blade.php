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
                            <a href="{{route('dataguru.create')}}" class="btn btn-primary btn-icon-split"><span class="text">Tambah Data</span></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>NIP/NUPTK</th>
                                            <th>Jabatan</th>
                                            <th>Tanggal Mulai Bekerja</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i=>$row)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$row->nama_guru}}</td>
                                            <td>{{$row->tanggal_lahir}}</td>
                                            <td>{{$row->jenis_kelamin}}</td>
                                            <td>{{$row->nip}}</td>
                                            <td>{{$row->jabatan}}</td>
                                            <td>{{$row->bekerja}}</td>
                                            <td><a href="{{route('dataguru.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td><form action="{{route('dataguru.destroy',$row->id)}}" method="post">
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