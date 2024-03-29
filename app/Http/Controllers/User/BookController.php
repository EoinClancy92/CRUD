<?php
# @Date:   2019-11-01T16:23:08+00:00
# @Last modified time: 2019-11-01T20:07:28+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      //$this->middleware('role:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();

        return view('user.books.index')->with([
          'books' => $books
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('user.books.show')->with([
          'book' => $book
        ]);

    }

}
