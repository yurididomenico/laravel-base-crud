@extends('layouts.app')

@section('title-page', 'test')

@section('main-content')
    <h1>Pagina Comics</h1>
    {{-- Tutti i record della tabella comics --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Immagine</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $elem)
                <tr>
                    <td>{{$elem->id}}</td>
                    <td>{{$elem->title}}</td>
                    <td>{{$elem->description}}</td>
                    <td>{{$elem->thumb}}</td>
                    <td>{{$elem->price}}</td>
                    <td>{{$elem->series}}</td>
                    <td>{{$elem->sale_date}}</td>
                    <td>{{$elem->type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
