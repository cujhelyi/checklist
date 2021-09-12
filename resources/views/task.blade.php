<!doctype html>

<title>Checklist</title>

<link rel ="stylesheet" href="/app.css">
<body>
<form action="/newTask" method="POST">
    @csrf
    <label>New Page
        <textarea name="hello" cols="30" rows="1"></textarea>
    </label>

    <button type="submit">Submit</button>
</form>
@foreach($tasks as $task)
    <article>
        <h1>
            {{--                <input type='checkbox' name='checkboxArray[]'>--}}
            <label>{{$task->name}}</label>
            <a href={{"/delete/".$task->name}}>Delete</a>
        </h1>
    </article>
@endforeach

</body>
