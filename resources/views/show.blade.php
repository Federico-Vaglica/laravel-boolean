@extends('layouts.app')
@section('titolo','Studente')
    


    @section('content')
    <div class="card-deck ">
            <div class="card container-card">
            <img class="card-img-top" src="{{$student['img']}}" alt="{{$student['nome']}}">
            <div class="card-body">
            <h5 class="card-title">{{$student['nome']}}</h5>
                <p class="card-text">{{$student['descrizione']}}</p>
                <p class="card-text"><small class="text-muted">{{$student['anni']}}</small></p>
            </div>
            </div>
    </div>
    @endsection