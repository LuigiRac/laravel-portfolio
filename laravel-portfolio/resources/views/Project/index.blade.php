@extends('layouts.project')


@section('title', 'Il mio Portfolio')
    
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Nome Repo</th>
        <th scope="col">Url Repo</th>
        <th scope="col">Descrizione Repo</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($projects as $project)
        <tr>
            <td>{{$project -> name}}</td>
            <td><a href="{{$project -> repo}}">{{$project -> repo}}</a></td>
            <td>{{$project -> description}}</td>
        </tr>

        @endforeach

@endsection