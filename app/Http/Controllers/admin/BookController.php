<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Book;
use App\Http\Requests\BookRulesRequest;


class BookController extends Controller
{
    public function create(BookRulesRequest $request)
    {
        Book::create($request->all());
        return redirect()->route('mainAdmin');
    }

    public function update(BookRulesRequest $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('mainAdmin');
    }


    public function delete($id)
    {
        Book::find($id)->delete();
        return redirect()->route('mainAdmin');
    }
}
