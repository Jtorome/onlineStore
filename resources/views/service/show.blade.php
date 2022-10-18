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
           {{ $viewData["service"]["name"] }} (precio: ${{ $viewData["service"]["price"] }})
        </h5>
        <p class="card-text">{{ $viewData["service"]["fast"] == 1 ? 'Debe de estar en ayunas' : 'No debe de estar en ayunas' }}</p>
      </div>
    </div>
  </div>
</div>
@endsection
