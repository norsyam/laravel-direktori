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
                    <form method="GET">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            name="search"
                            value="{{ request()->get('search') }}"
                            class="form-control"
                            placeholder="Search..."
                            aria-label="Search"
                            aria-describedby="button-addon2">
                          <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>

                    <table class="table">
                        <thead>
                          <tr>
                            <th>Bil.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No KP</th>
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
                                        {{$personel->nama}}
                                    </td>
                                    <td>
                                        {{$personel->no_kp}}
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
