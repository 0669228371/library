@extends('layout.main')

@section('menu_name', 'Admin')
@section('menu_link', Route('mainAdmin'))


@section('content')





    <form method="POST" action="{{ Request::url($route )}}">
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
            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $author->name or '' }}">
            <input type="hidden" name="_method" value="{{$method or 'POST'}}">

        </div>
        {{ csrf_field() }}
        <input type="submit" class="btn btn-success" value="Save">
    </form>
@endsection