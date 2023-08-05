<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
</head>
<body>
    <h1>Todo app</h1>
    <a href="{{ route('todos.create') }}">Create new Todo</a>
    <ul>
        @foreach ($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong>
                <p>{{ $todo->description }}</p>
                <p>Status: {{ $todo->completed ? 'Completed' : 'Not Completed' }}</p>
                <form method="POST" action="{{ route('todos.destroy', $todo->id) }}" style='display:inline;'>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
</body>
</html>