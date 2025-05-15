@extends('layouts.project')

    
@section('content')

<div class="card">
    <h5 class="card-header"><strong>Nome Repo: </strong>{{$project->name}}</h5>
    <div class="card-body">
      <h5 class="card-title"><strong>URL Repo: </strong> <a href="{{$project->repo}}">{{$project->repo}}</a></h5>
      <p class="card-text">{{$project->description}}</p>
      <p class="card-text">{{$project->type->name}}</p>
      <div class="text-center d-flex gap-3">
        <a class="btn btn-warning" href="{{route('project.edit', $project)}}">Modifica</a>
        <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
        Elimina
        </button>
      </div>
    </div>
  </div>


<div class="container text-center d-flex py-4 gap-3">

   <a class="btn btn-primary" href="{{route('project.create')}}">Aggiungi un progetto</a>
  <a class="btn btn-success" href="{{route('project.index', $project)}}">Torna alla Home</a>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
          Sei sicuro di voler eliminare il progetto?
        </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
          
    <form action="{{route('project.destroy', $project)}}" method="POST">
      @csrf
      @method('DELETE')
     <input type="submit" class="btn btn-danger " value="Elimina">
    </form>
  </div>
</div>

  
@endsection