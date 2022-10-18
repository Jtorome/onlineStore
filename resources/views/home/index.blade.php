@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/smartwatch.png') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/headset.png') }}" class="img-fluid rounded">
  </div>
  <div class="col-md-6 col-lg-4 mb-2">
    <img src="{{ asset('/img/smartphone.png') }}" class="img-fluid rounded">
  </div>
</div>
@endsection
