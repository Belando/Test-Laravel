<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Book::first() solo el primero
        return Book::first()->get(); //todos desde el primero
        // return Book::last()->get(); //todos desde el ultimo
        // return Book::first()->paginate(5); Me devuelve páginas con 5 resultados en cada
    }

    public function getByTitle($value)
    {
        return Book::where('title', $value)->get();
    }

    public function getById($id)
    {
        return Book::find($id); //find solo un parámetro
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create($request->all());  
        return 'Done';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Book::where('id', $request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book -> delete();
        return 'Done';
    }
}
