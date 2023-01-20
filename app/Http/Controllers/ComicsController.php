<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $comics = Comic::All();
        $comics = Comic::paginate(4);


        $data =
        [
            'comics' => $comics
        ];

        // dd($data);

        return view('pages.comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_record = new Comic();
        $new_record->title = $data['title'];
        $new_record->description = $data['description'];
        $new_record->thumb = $data['thumb'];
        $new_record->price = $data['price'];
        $new_record->series = $data['series'];
        $new_record->sale_date = $data['sale_date'];
        $new_record->type = $data['type'];
        $new_record->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singolo_elem = Comic::findOrFail($id);
        // dd($singolo_elem);
        return view('pages.comics.show', compact('singolo_elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);

        return view('pages.comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $comics = Comic::findOrFail($id);
        $comics->update();

        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::findOrFail($id);
        $comics->delete();
        return redirect()->route('comics.index')->with('success', "Hai cancellato con successo il prodotto: $comics->title");
    }
}
