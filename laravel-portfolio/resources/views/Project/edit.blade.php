@extends('layouts.project')

@section('title', 'Modifica un progetto')
   

@section('content')

<form action="{{ route('project.update', $project)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-control mb-3 d-flex flex-column">
        <label for="name">Nome</label>
        <input type="text" name="name" value = '{{$project -> name}}'>
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="repo">Url Repo</label>
        <input type="text" name="repo" id="repo" value = '{{$project -> repo}}'>
    </div>
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="description">Descrizione Repo</label>
        <textarea name="description" id="description" width='100%' rows="5">{{$project -> description}}</textarea>
    </div>

    <input type="submit" value='Salva repo'>

</form>

@endsection

