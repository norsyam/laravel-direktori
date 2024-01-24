@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Bahagian') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Tambah Bahagian</p>
                    <form action="{{route('bahagian.update',$bahagian->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_bahagian" class="form-label">Nama Bahagian</label>
                            <input type="text" class="form-control" name="nama_bahagian" aria-describedby="namaBahagian" value="{{$bahagian->nama_bahagian}}" autofocus>
                            <div class="form-text">Sila Masukkan Nama Bahagian.</div>
                        </div>
                        <button type="submit" class="btn btn-success">Pinda</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
