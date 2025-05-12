@extends('layouts.project')

    
@section('content')

<div class="card">
    <h5 class="card-header"><strong>Nome Repo: </strong>{{$project -> name}}</h5>
    <div class="card-body">
      <h5 class="card-title"><strong>URL Repo: </strong> <a href="{{$project -> repo}}">{{$project -> repo}}</a></h5>
      <p class="card-text">{{$project -> description}}</p>
    </div>
  </div>


  <div class="container text-center d-flex py-4 gap-3">
    <a class="btn btn-warning" href="{{route('project.edit', $project)}}">Modifica</a>


    <form action="{{route('project.destroy', $project)}}" method="POST">
      @csrf
      @method('DELETE')
     <input type="submit" class="btn btn-danger" value="Elimina">
 </form>

  </div>

  
@endsection