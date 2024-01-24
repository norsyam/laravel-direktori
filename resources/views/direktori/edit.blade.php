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
                    <p>Pinda Staff</p>
                    <form action="{{route('direktori.update',$direktori->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id_bahagian" class="form-label">Nama Staff</label>
                            <select class="form-select" aria-label="Pilih Bahagian" name="id_bahagian">
                                @foreach ($bahagians as $bahagian)
                                    @if ($bahagian->id == $direktori->id_bahagian)
                                        <option value="{{$bahagian->id}}" selected>{{$bahagian->nama_bahagian}}</option>
                                    @else
                                        <option value="{{$bahagian->id}}">{{$bahagian->nama_bahagian}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_jawatan" class="form-label">Jawatan</label>
                            <select class="form-select" aria-label="Pilih Jawatan" name="id_jawatan">
                                @foreach ($jawatans as $jawatan)
                                    @if ($jawatan->id == $direktori->id_jawatan)
                                        <option value="{{$jawatan->id}}" selected>{{$jawatan->nama_jawatan}}</option>
                                    @else
                                        <option value="{{$jawatan->id}}">{{$jawatan->nama_jawatan}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Pinda</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
