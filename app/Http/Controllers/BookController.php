<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $keyword = $request->keyword;
        // dd($keyword);
        $category = Book::where('title', 'LIKE', '%' . $keyword . '%')->paginate(15);
        return view('dash.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'isbn' => 'required',
            // 'categoryBook' => 'required',
            'synopsis' => 'required',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif',
        ]);

        $image = $request->file('cover');

        $imgName = time() . rand() . '.' . $image->extension();

        if (!file_exists(public_path('/img' . $image->getClientOriginalName()))) {
            $destinationPath = public_path('/img');

            $image->move($destinationPath, $imgName);
            $upload = $imgName;
        } else {
            $upload = $image->getClientOriginalName();
        }
        Book::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'isbn' => $request->isbn,
            'synopsis' => $request->synopsis,
            'cover' => $upload,
            'categorybook_id' => $request->categorybook_id,
        ]);

        return redirect('/create')->with('success', 'Berhasil Menambahkan Book!');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
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
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book, $id)
    {
        $book = Book::findOrfail($id);
        $book->delete();
        return redirect('/create')->with('succes', 'Berhasil Menghapus Data');
    }
}
