<x-layout>
    @foreach($tasks as $task)
        <article>
            <h1>
                <a href="/task/{{$task->id}}">
                    {{$task->name}}
                </a>
            </h1>

            <div>
                {{$task->page}}
            </div>
        </article>
    @endforeach
</x-layout>