@extends('layouts.app')

@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/ragdoll.jpeg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/scottish.jpeg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">

<img src="{{ asset('/img/siam.jpeg') }}" class="img-fluid rounded"> </div>
</div>
@endsection