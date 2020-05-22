@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Listado Comentarios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-md-center">

                        @foreach ($datos as $dato)
                        <div class="col-sm-10">
                          <div class="card text-center">
                      
                              <div class="row">
                                <div class="col-2 card-header">{{$dato['id']}}</div>
                                <div class="col-8 card-header"><strong>{{$dato['name']}}</strong></div>
                              </div>
                            
                            <div class="card-body">
                              <h5 class="card-title mb-2 text-muted">Escrito por: {{$dato['email']}}</h5>
                            <p class="card-text">{{$dato['body']}}</p>
                            </div>
                          </div>
                        </div>
                  
                        @endforeach
                      </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
