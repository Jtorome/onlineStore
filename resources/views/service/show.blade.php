@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/img/'.$viewData["service"]["image"]) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           Nombre: {{ $viewData["service"]["name"] }}
        </h5>
        <br>
        <h5 class="card-title">
            Precio: ${{ $viewData["service"]["price"] }}
        </h5>
        <br>
        <h5 class="card-title">
            En ayunas: {{ $viewData["service"]["fast"] == 1 ? 'Si' : 'Nos' }}
        </h5>
      </div>
    </div>
  </div>
</div>
@endsection
