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
                    <a href="{{ route('bahagian.create') }}" class="btn btn-primary">+ Bahagian</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Bil.</th>
                                <th>Bahagian</th>
                                <th>Fungsi</th>
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
                                            <a href="{{route('direktori.index',['id_bahagian'=>$bahagian->id])}}" class="btn btn-secondary"> Staff</a>
                                            <a href="{{route('bahagian.edit',$bahagian->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Pinda</a>
                                            {{-- <a href="{{route('bahagian.destroy',$bahagian->id)}}" class="btn btn-danger"> Padam</a> --}}
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$bahagian->id}}"><i class="bi bi-trash"></i> Padam</button>
                                            <div class="modal fade" id="exampleModal{{$bahagian->id}}" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title">Padam Bahagian {{$bahagian->nama_bahagian}}</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('bahagian.destroy',$bahagian->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Padam</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Batal</button>
                                                        </form>
                                                    </div>

                                                  </div>
                                                </div>
                                              </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $bahagians->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
