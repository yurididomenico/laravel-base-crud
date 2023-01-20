@extends('layouts.app')

@section('title-page', 'Lista fumetti')

@section('main-content')
    <h1>Pagina Comics</h1>
    {{-- Tutti i record della tabella comics --}}
    <button type="button" class="btn btn-primary">
        <a href="{{route('comics.create')}}" class="text-white text-decoration-none">+</a>
    </button>



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
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $elem)
                <tr>
                    <td>{{$elem->id}}</td>
                    <td>
                        <a href="{{route('comics.show', $elem->id)}}">
                            {{$elem->title}}
                        </a>
                    </td>
                    <td>{{$elem->description}}</td>
                    <td>{{$elem->thumb}}</td>
                    <td>{{$elem->price}}</td>
                    <td>{{$elem->series}}</td>
                    <td>{{$elem->sale_date}}</td>
                    <td>{{$elem->type}}</td>
                    <td>
                        <form action="{{ route('comics.destroy', $elem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-xmark p-1 fs-3"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $comics->links() }}

@endsection
