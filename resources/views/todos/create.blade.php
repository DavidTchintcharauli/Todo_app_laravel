<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App - Create</title>
</head>
<body>
    <h1>Create New Todo</h1>
    <form method="POST" action="{{ route('todos.store') }}">
        @csrf
        <label>Title</label>
        <input type="text" name="title" required>
        <br>
        <label>Description</label>
        <textarea name="description" required></textarea>
        <br>
        <label>
            Complited:
            <input type="checkbox" name="completed" value="1">
        </label>
        <br>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('todos.index') }}">Back to List</a>
</body>
</html>