@extends('layout.main')

@section('menu_name', 'User')
@section('menu_link', Route('home'))



@section('content')
    <h1 class="col-12 text-center">Admin Page</h1>
    <!-- Books Section begin -->
    <div class="col-12 col-md-6 card-deck  text-center" >

        <div class="card mb-6 box-shadow">
            <h4 class="card-header"> Books </h4>
            <ul class="card-body list-unstyled">
                <a class=" btn btn-success mb-3" href="{{ Route('createBook') }}" role="button">Create Book</a>
                @foreach($books as $book)

                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 text-left">
                        {{ $book->title }} - {{ $book->author->name }}
                                </div>
                                <div class="col-md-3 text-right">
                                    <form onsubmit = " return ConfirmDelete('Are you sure you want to delete?')" action="{{ url('admin/book/'.$book->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-link text-danger "><i class="fa fa-trash"
                                                                                                   aria-hidden="true"></i>
                                        </button>
                        <a href="{{ route('updateBook', $book->id) }}" class="btn text-success"><i class="fa fa-refresh"  aria-hidden="true"></i></a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>

    <!-- Books Section end -->
    <!-- Author Section begin -->

    <div class="col-12 col-md-6 card-deck  text-center" style="display: block;">

        <div class="card mb-6 box-shadow">
            <h4 class="card-header"> Authors </h4>
            <ul class="card-body list-unstyled">
                <a class=" btn btn-success mb-3" href="{{ Route('createAuthor') }}" role="button">Create Author</a>
                @foreach($authors as $author)

                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 text-left">
                                    <a class="text-danger " href="{{ route('listAuthor', $author->id) }}">{{ $author->name }}</a>- {{ count($author->books) }}
                                </div>
                                <div class="col-md-3 text-right">
                                    <form onsubmit = "return ConfirmDelete('If you delete the author, all his books will also be deleted')" action="{{ url('admin/author/'.$author->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-link text-danger "><i class="fa fa-trash"
                                                                                                   aria-hidden="true"></i>
                                        </button>
                                        <a href="{{ route('updateAuthor', $author->id) }}" class="btn text-success"><i
                                                    class="fa fa-refresh" aria-hidden="true"></i></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>


                @endforeach
            </ul>
        </div>
    </div>

    <!-- Author Section end -->



@endsection