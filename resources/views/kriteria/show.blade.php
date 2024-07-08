@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Kriteria</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('kriteria.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kriteria:</strong>
                    {{ $kriteria->nama_kriteria }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bobot:</strong>
                    {{ $kriteria->bobot }}
                </div>
            </div>
        </div>
    </div>
@endsection
