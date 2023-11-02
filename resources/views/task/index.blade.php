<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('styles/styles_index.css') }}">
    <title>To Do List</title>

    

</head>

<body>
    <div class="container">
        <h1 class="title">To Do List</h1>


        <form method='POST' action="{{ route('tasks.store') }}" class="form-container">
            @csrf
            <input type="text" name="name_field" placeholder="Task's name">
            <button type="submit">Add</button>
        </form>


        <ul class="task-list">
            @foreach ($tasks as $task)
            <li>

                <form id="form-{{ $task->id }}" method="POST" action="{{ route('tasks.update', $task->id) }}">
                    @csrf
                    @method('PATCH')
                    <input type="checkbox" class="task-checkbox" data-task-id="{{ $task->id }}" onclick="this.form.submit()" name="chbx_done" {{ $task->done ? 'checked' : '' }}>
                    <label class="task-label {{ $task->done ? 'done' : '' }}">{{ $task->name }}</label>
                </form>

                <div class="button-container">
                    <form method="GET" action="{{ route('tasks.show', $task->id) }}" class="delete-form right">
                        @csrf
                        <button type="submit" id="info_task"><span class="material-symbols-outlined">
                                info
                            </span>
                        </button>
                    </form>

                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" class="delete-form right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="delete_task"><span class="material-symbols-outlined">
                                cancel
                            </span>
                        </button>
                    </form>
                </div>

            </li>
            @endforeach
        </ul>
    </div>
    
</body>

</html>