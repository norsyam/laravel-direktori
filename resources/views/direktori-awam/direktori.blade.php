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
                    <div class="d-flex flex-row-reverse">
                        <form action="{{route('direktori-awam.direktori')}}" method="GET">
                            @csrf
                            @method('GET')
                            <div class="mb-3 input-group">
                                <select class="form-select" aria-label="Pilih Staff" name="id_bahagian">
                                    @foreach ($bahagians as $bhg)
                                        @if ($bahagian->id == $bhg->id)
                                            <option value="{{$bhg->id}}" selected>{{$bhg->nama_bahagian}}</option>
                                        @else
                                            <option value="{{$bhg->id}}">{{$bhg->nama_bahagian}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-secondary">Papar Staff</button>
                            </div>

                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Bil.</th>
                                <th scope="col">Personel</th>
                                {{-- <th scope="col">Bahagian</th> --}}
                                <th scope="col">Jawatan</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($direktoris as $direktori)
                                    <tr>
                                        <td>
                                            {{$i++}}
                                        </td>
                                        <td>
                                            {{strtoupper($direktori->personel->nama)}}
                                        </td>
                                        {{-- <td>
                                            {{$direktori->bahagian->nama_bahagian}}
                                        </td> --}}
                                        <td>
                                            {{$direktori->jawatan->nama_jawatan}}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
