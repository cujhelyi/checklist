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
<div x-data="{show: false}">
@foreach($currentPage->tasks as $task)
    <article>
        <h1>
            <input type="checkbox" name="tasksDone" @click="myFunction()">
            <label>{{$task->name}}</label>
            <a href={{"/deleteTask/".$task->id}}>Delete</a>
        </h1>
    </article>
@endforeach
</div>
<div id="base" class="waiting">
    <img src="/images/cruisin-oldies.jpg" alt="crusin car" height="200" width="200">
</div>

@endsection
<script>
    function myFunction() {
        let tasksLen = 0;
        let boxArray = document.getElementsByName("tasksDone")
        for (let i = 0; i < boxArray.length; i++) {
            if(boxArray[i].checked) {
                tasksLen++;
            }
        }
        if(tasksLen === boxArray.length) {
            submitClick();
        }
    }
    function submitClick() {
        document.getElementById('base').classList.remove('waiting');
        document.getElementById('base').classList.add('goTime');

        setTimeout(function() {
            document.getElementById('base').remove();
        }, 800);
    }
</script>
