<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;    //link the model to controller

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=book ::all();   
        return view ("home",compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_title'=> 'required',
            'book_author'=> 'required',
            'published_year'=> 'required|integer',
        ]);

        $data = $request->except("_token");

        $book= new book;
        $book->book_title=$data["book_title"];
        $book->book_author=$data["book_author"];
        $book->published_year=$data["published_year"];
        $book->save();

        return redirect()->route('home')->with('message','successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books= book::find($id);
        return view ('view',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books=book::find($id);
        return view("edit",compact('books'));
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

        $request->validate([
            'book_title'=> 'required',
            'book_author'=> 'required',
            'published_year'=> 'required|integer',
        ]);
        
        $book=book::find($id) ;
        $book->book_title=$request->input("book_title");
        $book->book_author=$request->input("book_author");
        $book->published_year=$request->input("published_year");
        $book->save();

        return redirect()->route('home')->with('message','successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books=book::find($id);
        if ($books){
            $books->delete();
            return redirect()->route("home")->with("message",'successfully deleted');
        }
    }
}
