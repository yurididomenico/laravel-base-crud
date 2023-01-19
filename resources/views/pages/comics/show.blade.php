@extends('layouts.app')

@section('title-page')
    Comics | {{$singolo_elem->title}}
@endsection

@section('main-content')

    <h1 class="text-center">{{$singolo_elem->title}}</h1>

    <div>
        <p>
            {{$singolo_elem->description}}
        </p>
    </div>
@endsection
