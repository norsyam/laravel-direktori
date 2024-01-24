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
                    <form action="{{route('bahagian.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="nama_bahagian" class="form-label">Nama Bahagian</label>
                            <input type="text" class="form-control" name="nama_bahagian" aria-describedby="namaBahagian" autofocus>
                            <div class="form-text">Sila Masukkan Nama Bahagian.</div>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
