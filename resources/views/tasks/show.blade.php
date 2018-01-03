<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Task</title>
    </head>
    <body>
        <h1>{{ $task->body }}</h1>
        <a href="{{ url('/') }}/tasks">See more tasks</a>
    </body>
</html>
