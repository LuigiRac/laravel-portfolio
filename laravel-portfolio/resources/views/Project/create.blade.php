@extends('layouts.project')

@section('title', 'Aggiungi un progetto')
   
@section('content')

<form action="{{ route('project.store')}}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome Repo</label>
        <input type="text" name="name" id="name">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="repo">Url Repo</label>
        <input type="text" name="repo" id="repo">
    </div>
    <div class="form-control mb-3 d-flex flex-row">

        @foreach ($technologies as $technology)

        <div class="tag me-2">
            <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="{{$technology->id}}">
            <label for="{{$technology->id}}">{{$technology->name}}</label>
        </div>
            
        @endforeach
        
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="type">Tipo di Repo</label>
       <select name="type_id" id="type_id">

        @foreach ($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
        @endforeach

       </select>
    </div>
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione Repo</label>
        <input type="text" name="description" id="description">
    </div>

    

    <input class="btn btn-primary" type="submit" value='Salva'>

</form>

@endsection