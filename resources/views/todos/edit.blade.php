<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App - Edit</title>
</head>
<body>
    <h1>Edit Todo</h1>
    <form method="POST" action="{{ route('todos.update', $todo->id) }}">
        @csrf
        @method('PUT')
        <label>Title</label>
        <input type="text" name="title" value="{{ $todo->title }}" required>
        <br>
        <label>Description</label>
        <textarea name="description" required>{{ $todo->description }}</textarea>
        <br>
        <label>
            Completed:
            <input type="checkbox" name="completed" value="1" {{ $todo->completed ? 'checked' : '' }}>
        </label>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('todos.index') }}">Back to List</a>
</body>
</html>