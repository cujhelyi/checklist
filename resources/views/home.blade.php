@extends('layout')
@section('content')
<form action="/newPage" method="POST" style="font-size: x-large;">
    @csrf
    <label>New Page
        <textarea name="hello" cols="30" rows="1"></textarea>
    </label>

    <button type="submit">Submit</button>
</form>
@foreach($pages as $page)
    <article>
        <h1>
            <a href={{"/".$page->name}}>{{$page->name}}</a>
            <a href={{"/deletePage/".$page->id}}>Delete</a>
        </h1>
    </article>
@endforeach
@endsection
