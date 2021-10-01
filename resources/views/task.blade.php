@extends('layout')
@section('content')
<div style="overflow-x: scroll; font-size: x-large; border-style: solid;">
    <a href={{"/"}}>home </a>
    @foreach($pages as $page)
        <a href={{"/".$page->name}} >{{' '.$page->name.' '}}</a>
    @endforeach
</div>
<p style="font-size: x-large;">
    Current Page: {{$currentPage->name}}
</p>
<form action={{"/newTask/".$currentPage->id}} method="POST" style="font-size: x-large;">
    @csrf
    <label>New Task
        <input type="text" name="hello" cols="50"/>
{{--        TODO: input validation--}}
    </label>

    <button type="submit">Submit</button>
</form>
<form action="/changeStatus" method="POST">
    @csrf
    @foreach($currentPage->tasks as $task)
        <article>
            <h1>
                <button type='submit' name='submit' value={{$task->id}}>{{$task->status}}</button>
                <input type="checkbox" name="checkboxArray[]" onclick="for ($checkboxArray as $checkbox)">
                <label>{{$task->name}}</label>
                <a href={{"/deleteTask/".$task->id}}>Delete</a>
            </h1>
        </article>
    @endforeach
{{--    <button type="submit">Submit</button>--}}
</form>
@endsection
{{--make array of checkboxes of size = $currentPage->tasksDONE--}}
{{--add them one beside each task nameDONE--}}
{{--when one is changed check if they're all checked--}}
{{--profit??--}}
