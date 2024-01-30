@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Personel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Info Personel</p>
                    <ul class="list-group">
                        <li class="list-group-item">Nama: {{$personel->nama}}</li>
                        <li class="list-group-item">No KP: {{$personel->no_kp}}</li>
                        <li class="list-group-item">Jantina: {{$personel->jantina}}</li>
                        <li class="list-group-item">Emel: {{$personel->email}}</li>
                    </ul>


                    {{-- <div class="d-flex justify-content-center">
                        {!! $bahagians->links() !!}
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
