<!doctype html>

<title>Checklist</title>

<link rel ="stylesheet" href="/app.css">
<body>
<form action="/newPage" method="POST">
    @csrf
    <label>New Page
        <textarea name="hello" cols="30" rows="1"></textarea>
    </label>

    <button type="submit">Submit</button>
</form>
@foreach($pages as $page)
    <article>
        <h1>
{{--                <input type='checkbox' name='checkboxArray[]'>--}}
            <a href={{"/".$page->name}}>{{$page->name}}</a>
            <a href={{"/delete/".$page->name}}>Delete</a>
        </h1>
    </article>
@endforeach

</body>
