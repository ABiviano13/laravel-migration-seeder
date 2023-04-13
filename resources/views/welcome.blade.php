@extends('layouts.app')

@section('content')
    <ul>
        <h1 class="py-4">
            Orari dei Treni
        </h1>
        @foreach ($trains as $train)
            <div class="col card p-3">
                <h2 class="text-center text-success">
                    {{$train->departure_station}} - {{$train->arrival_station}}
                </h2>
                <p>
                    Agenzia di viaggio = 
                    <span class="fw-semibold">
                        {{$train->agency}}
                    </span>
                </p>
                <p>
                    Orario di Partenza e data = 
                    <span class="fw-semibold">
                        {{$train->departure_time}}
                    </span>
                </p>
                <p>
                    Orario di Partenza e data 
                    <span class="fw-semibold">
                        {{$train->arrival_time}}
                    </span>
                </p>
                <p>
                    Codice =
                    <span class="fw-semibold">
                        {{$train->code}}
                    </span>
                </p>
                <p>
                    Numero di Carrozze = 
                    <span class="fw-semibold">
                        {{$train->number_of_carriages}}
                    </span>
                </p>
                <p>
                    In ritardo = 
                    <span class="fw-semibold text-danger">
                        {{$train->delay}}
                    </span>
                </p>
                <p>
                    Eliminata Corsa = 
                    <span class="fw-semibold text-danger">
                        {{$train->deleted}}
                    </span>
                </p>
                
            </div>
        @endforeach
    </ul>
@endsection