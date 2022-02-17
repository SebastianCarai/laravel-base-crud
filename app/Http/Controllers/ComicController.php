<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicController extends Controller
{
    /**
     * ! Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        $data =[
            'comics' => $comics
        ];
        
        return view('comics.index', $data);
    }

    /**
     * ! Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * ! Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $submitted_comic = $request->all();

        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'required|max:50000',
                'thumb' => 'required|max:300',
                'series' => 'required|max:100',
                'price' => 'required|max:8',
                'type' => 'required|max:50',
                'sale_date' => 'required|max:15',
            ]
        );

        $new_comic = new Comic;
        $new_comic->title = $submitted_comic['title'];
        $new_comic->description = $submitted_comic['description'];
        $new_comic->thumb = $submitted_comic['thumb'];
        $new_comic->series = $submitted_comic['series'];
        $new_comic->price = $submitted_comic['price'];
        $new_comic->type = $submitted_comic['type'];
        $new_comic->sale_date = $submitted_comic['sale_date'];
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * ! Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            'comic' => $comic
        ];

        return view('comics.show', $data);
    }

    /**
     * ! Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $data=[
            'comic' => $comic
        ];

        return view('comics.edit', $data);
    }

    /**
     * ! Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Get the form info
        $updated_data = $request->all();

        $request->validate(
            [
                'title' => 'required|max:100',
                'description' => 'required|max:50000',
                'thumb' => 'required|max:300',
                'series' => 'required|max:100',
                'price' => 'required|max:8',
                'type' => 'required|max:50',
                'sale_date' => 'required|max:15',
            ]
        );

        $comic_to_edit = Comic::findOrFail($id);

        $comic_to_edit->update($updated_data);
        // dd($comic_to_edit);

        return redirect()->route('comics.show' , ['comic' => $comic_to_edit->id]);
    }

    /**
     * ! Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_delete = Comic::findOrFail($id);

        $comic_to_delete->delete();

        return redirect()->route('comics.index');
    }
}
