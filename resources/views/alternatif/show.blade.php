@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Detail Alternatif
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{ $alternatif->id }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Alternatif</th>
                                <td>{{ $alternatif->nama_alternatif }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nilai C1</th>
                                <td>{{ $alternatif->nilai_c1 }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nilai C2</th>
                                <td>{{ $alternatif->nilai_c2 }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nilai C3</th>
                                <td>{{ $alternatif->nilai_c3 }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nilai C4</th>
                                <td>{{ $alternatif->nilai_c4 }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nilai C5</th>
                                <td>{{ $alternatif->nilai_c5 }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('alternatif.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
