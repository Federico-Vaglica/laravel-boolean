@extends('layouts.app')
@section('titolo','Studenti')
    


@section('content')
<div class="card-deck ">
        @foreach ($data as $key => $student)
            <div class="card container-card">
            <img class="card-img-top" src="{{$student->img}}" alt="{{$student->nome}}">
            <div class="card-body">
                <a href="{{route('Student.show',['id'=>$student->id])}}"><h5 class="card-title">{{$student->name}}</h5></a>
                <p class="card-text">{{$student->descrizione}}</p>
                <p class="card-text"><small class="text-muted">{{$student->anni}}</small></p>
            </div>
            </div>
        @endforeach
  </div>
@endsection