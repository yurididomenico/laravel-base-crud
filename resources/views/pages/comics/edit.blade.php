@extends('layouts.app')

@section('title-page')
    Comics | Edit
@endsection

@section('main-content')
    <h1 class="text-center">Modifica Prodotto</h1>

    <form method="POST" Action="{{ route('comics.update', $comics->id) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input value="{{ $comics->title }}" name="title" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="title">{{ $comics->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input value="{{ $comics->thumb }}" name="thumb" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input value="{{ $comics->price }}" name="price" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input value="{{ $comics->series }}" name="series" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Data</label>
            <input value="{{ $comics->sale_date }}" name="sale_date" type="date" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input value="{{ $comics->type }}" name="type" type="text" class="form-control" id="title">
        </div>



        <button type="submit" class="btn btn-primary">Modifica Prodotto</button>
    </form>
@endsection
