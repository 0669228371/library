@extends('layout.main')

@section('menu_name', 'Admin')
@section('menu_link', Route('mainAdmin'))


@section('content')

<div class="col-md-6">
    <div class="row">
    <a href="{{ route('mainAdmin') }}" class=" col-md-1 btn text-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    <h2 class="text-center col-md-10">List of author's books</h2>
    </div>
</div>
    <div class="col-md-12">
<div class="col-6 card-deck  text-center">

    <div class="card mb-6 box-shadow">
        <h4 class="card-header"> {{ $author->name }} </h4>
        <ul class="card-body list-unstyled">

            @foreach($author->books as $book)

            <li> {{ $book->title }}   </li>

            @endforeach
        </ul>
    </div>
</div>
    </div>
@endsection