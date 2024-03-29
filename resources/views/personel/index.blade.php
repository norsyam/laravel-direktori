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
                    <p>Senarai Personel</p>


                    <table class="table">
                        <thead>
                          <tr>
                            <th>Bil.</th>
                            <th scope="col">No KP</th>
                            <th>Profil</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($personels as $personel)
                                <tr>
                                    <td>
                                        {{$i++}}
                                    </td>

                                    <td>
                                        {{$personel->no_kp}}
                                    </td>

                                    <td>
                                        <a href="{{route('personel.show',$personel->no_kp)}}" class="btn btn-secondary"><i class="bi bi-person-circle"></i> Profil</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="d-flex justify-content-center">
                        {!! $bahagians->links() !!}
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
