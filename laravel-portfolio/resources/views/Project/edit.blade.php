@extends('layouts.project')

@section('title', 'Modifica un progetto')
   

@section('content')

<form action="{{ route('project.update', $project)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome</label>
        <input type="text" name="name" value = '{{$project->name}}'>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="repo">Url Repo</label>
        <input type="text" name="repo" id="repo" value = '{{$project->repo}}'>
    </div>
    

    <div class="form-control mb-3 d-flex flex-column">
        <label for="type">Tipo di Repo</label>
       <select name="type_id" id="type_id">

        @foreach ($types as $type)
            <option value="{{$type->id}}" {{$project->type_id == $type->id ? 'selected' : ''}}>{{$type->name}}</option>
        @endforeach

       </select>
    </div>

    <div class="form-control mb-3 d-flex flex-row">

        @foreach ($technologies as $technology)

        <div class="tag me-2">
            <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="{{$technology->id}}" {{$project->technologies->contains($technology->id) ? 'checked' : ''}}>
            <label for="{{$technology->id}}">{{$technology->name}}</label>
        </div>
            
        @endforeach
        
    </div>

     <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione Repo</label>
        <textarea name="description" id="description" width='100%' rows="5">{{$project->description}}</textarea>
    </div>
    
    <input type="submit" value='Salva repo'>

</form>

@endsection

