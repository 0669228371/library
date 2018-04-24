@extends('layout.main')

@section('menu_name', 'Admin')
@section('menu_link', Route('mainAdmin'))



@section('content')


        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif


            @foreach($authors as $author)
                <div class="col-md-3 col-12 card-deck mb-3 text-center">
                <div class="col-md-12 card mb-6 box-shadow">
                    <h4 class="card-header">   {{ $author->name }} </h4>
                    <ul class="card-body list-unstyled">
                        @foreach($author->books as $books)
                            <li>  {{ $books->title }} </li>
                        @endforeach
                    </ul>
                </div>
                </div>
            @endforeach








@endsection