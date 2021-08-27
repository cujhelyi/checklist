@extends('layout')

@section('content')
    @foreach($tasks as $task)
        <article>
            <h1>
                <label>
                    <input type='checkbox' name='checkboxArray[]'>
                </label>{{$task->name}}
            </h1>
        </article>
    @endforeach
@endsection
