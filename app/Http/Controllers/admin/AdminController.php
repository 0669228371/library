<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
use App\Book;

class AdminController extends Controller
{
    public function show(){
        $authors = Author::all();
        $books = Book::orderBy('id','DESK')->get();

        return view('admin/index',
            [
                'authors' => $authors,
                'books' => $books
            ]);

    }
    public function createAuthor()
    {

        return view('admin/author-profile',
            [
                'route' => 'createAuthor',
                'title_form' => 'New Author'
            ]
        );
    }
    public function updateAuthor($id)
    {
        $author = Author::find($id);
        return view('admin/author-profile',
            [
                'method' => 'PUT',
                'route' => 'updateAuthor',
                'title_form' => 'Update Author',
                'author' => $author
            ]
        );
    }
    public function createBook()
    {

        $authors = Author::all();
        return view('admin/book-profile',
            [
                'authors' => $authors,
                'route' => 'createBook',
                'title_form' => 'New Book'

            ]
        );
    }

    public function updateBook($id)
    {
        $book = Book::find($id);
        $authors = Author::all();

       return view('admin/book-profile',
            [
                'book' => $book,
                'authors' => $authors,
                'route' => 'updateBook',
                'method' => 'put',
                'title_form' => 'Update Book'
            ]
        );
    }

}
