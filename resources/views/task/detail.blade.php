<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('styles/styles_details.css') }}" >
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="title">Task <span class="material-symbols-outlined">
                receipt_long
            </span></h1>
        <p>{{$task->name}}</p>
        <p>Completed : {{$task->done ? 'YES' : 'NO'}}</p>
        <form method="GET" action="{{route('tasks.index')}}">
            @csrf
            <button type="submit" id="info_task">
                <span class="material-symbols-outlined">
                    arrow_circle_left
                </span>
            </button>
        </form>
    </div>
</body>

</html>