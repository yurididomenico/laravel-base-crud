@extends('layouts.app')

@section('title-page')
    Comics | Create
@endsection

@section('main-content')
    <h1 class="text-center">Nuovo Prodotto</h1>

    <form method="" Action="">
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="title"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input name="thumb" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Serie</label>
            <input name="series" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Data</label>
            <input name="sale_date" type="date" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control" id="title">
        </div>



        <button type="submit" class="btn btn-primary">Crea Prodotto</button>
    </form>
@endsection
