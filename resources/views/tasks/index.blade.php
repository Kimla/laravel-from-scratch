<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>welcome</title>
    </head>
    <body>
        <h1>Tasks</h1>
        <ul>
            @foreach ($tasks as $key => $task)
                <li>
                    <a href="{{ url('/') }}/tasks/{{ $task->id }}">{{ $task->body }}</a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
