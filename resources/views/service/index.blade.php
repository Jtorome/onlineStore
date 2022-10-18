@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["services"] as $service)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset('/img/'.$service["image"]) }}" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('service.show', ['id'=> $service["id"]]) }}"
            class="btn bg-primary text-white mt-2">Nombre: {{ $service["name"] }}</a>
        <br>
        <a href="{{ route('service.show', ['id'=> $service["id"]]) }}"
            class="btn bg-primary text-white mt-2">Precio: {{ $service["price"] }}</a>
        <br>
        <a href="{{ route('service.show', ['id'=> $service["id"]]) }}"
            class="btn bg-primary text-white mt-2">En ayunas: {{ $service["fast"] == 1 ? 'Si' : 'No' }}</a>
        <br>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
