@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Direktori Bahagian {{ $bahagian->nama_bahagian }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Tambah Staff</p>
                    <form action="{{route('direktori.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="id_bahagian" value="{{$bahagian->id}}">
                        <div class="mb-3">
                            <label for="id_personel" class="form-label">Nama Staff</label>
                            <select class="form-select" aria-label="Pilih Staff" name="id_personel">
                                @foreach ($personels as $personel)
                                    <option value="{{$personel->id}}">{{$personel->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_jawatan" class="form-label">Jawatan</label>
                            <select class="form-select" aria-label="Pilih Staff" name="id_jawatan">
                                @foreach ($jawatans as $jawatan)
                                    <option value="{{$jawatan->id}}">{{$jawatan->nama_jawatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
