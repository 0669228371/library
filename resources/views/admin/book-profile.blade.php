@extends('layout.main')

@section('menu_name', 'Admin')
@section('menu_link', Route('mainAdmin'))


@section('content')

    <form method="POST" action="{{ Request::url($route) }}">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <h3>{{ $title_form }}</h3>
            <input type="text" name="title" class="form-control"
                   placeholder="Enter Title" value="{{ $book->title or '' }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select author</label>
            <select name="author_id" class="form-control" id="exampleFormControlSelect1">

                @if(Request::url($route) ==  Route('createBook'))
                    <option selected disabled>Select...</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                @else
                    @foreach($authors as $author)
                        <option
                                @if($author->id == $book->author_id)
                                selected
                                @endif
                                value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                @endif


            </select>
        </div>
        <input type="hidden" name="_method" value="{{ $method or 'POST' }}">

        {{ csrf_field() }}
        <input type="submit" class="btn btn-success" value="Save">
    </form>

@endsection
