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
                    <p>Senarai Bahagian</p>

                    <table class="table">
                        <thead>
                          <tr>
                            <th>Bil.</th>
                            <th scope="col">Bahagian</th>
                            <th scope="col">Fungsi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($bahagians as $bahagian)
                                <tr>
                                    <td>
                                        {{$i++}}
                                    </td>
                                    <td>
                                        {{$bahagian->nama_bahagian}}
                                    </td>
                                    <td>
                                        <a href="{{route('direktori-awam.direktori',['id_bahagian'=>$bahagian->id])}}" class="btn btn-secondary"> Staff</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
