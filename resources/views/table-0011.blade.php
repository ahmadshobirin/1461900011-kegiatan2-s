@extends('layouts.main')

@section('page_heading', "Jadwal")

@section('content')
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Pelajaran</th>
                        <th>Guru</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>{{ $item->nama_pelajaran }}</td>
                            <td>{{ $item->nama_guru }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection