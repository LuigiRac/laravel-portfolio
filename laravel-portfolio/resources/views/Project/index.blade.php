@extends('layouts.project')


@section('title', 'Il mio Portfolio')
    
@section('content')

<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">URL</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Tipo</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td><a href="{{$project->repo}}">{{$project->repo}}</a></td>
            <td>{{$project->description}}</td>
            <td>{{$project->type->name}}</td>
          
            <td>
              <a class="btn btn-outline-primary" href="{{route('project.show', $project->id)}}">Visualizza</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

        <div class="container">
          <a class="btn btn-primary" href="{{route('project.create')}}">Aggiungi un progetto</a>
        </div>
        

@endsection

