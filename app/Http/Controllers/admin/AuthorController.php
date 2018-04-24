<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Author;
use App\Book;
use App\Http\Requests\AuthorRulesRequest;

class AuthorController extends Controller
{
    public function show($id)
    {
        $author = Author::find($id);

        return view('admin/author-list',
            [
                'author' => $author
            ]
        );
    }

    public function create(AuthorRulesRequest $request)
    {
        Author::create($request->all());

        return redirect()->route('mainAdmin');
    }

    public function update(AuthorRulesRequest $request, $id)
    {
        $author = Author::find($id);
        $author->update($request->all());

        return redirect()->route('mainAdmin');
    }

    public function delete($id)
    {
        Book::where('author_id', $id)->delete();
        Author::find($id)->delete();

        return redirect()->route('mainAdmin');
    }
}
