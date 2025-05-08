@extends('layouts.project')

    
@section('content')

<div class="card">
    <h5 class="card-header"><strong>Nome Repo: </strong>{{$project -> name}}</h5>
    <div class="card-body">
      <h5 class="card-title"><strong>URL Repo: </strong> <a href="{{$project -> repo}}">{{$project -> repo}}</a></h5>
      <p class="card-text">{{$project -> description}}</p>
    </div>
  </div>

@endsection