<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Tasks</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
  </head>
  <body>
    <header>
      <h1>My Tasks</h1>
    </header>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>

    
      <table border="1" cellpadding="10" cellspacing="0" style="width:450px">
            <tr><b>
                <td>ID</td>
                <td>Title</td>
                <td>Task</td>
                <td>Description</td></b>
            </tr>
      </table>
            <table border="1" cellpadding="10" cellspacing="0">
            @foreach($todolists as $todolist )

                <tr>
                    <td>{{$todolist->id}}</td>
                    <td>{{$todolist->inputTitle}}</td>
                    <td>{{$todolist->task}}</td>
                    <td>{{$todolist->description}}</td>
                    <td>
                    <a href="{{route('todolist.edit', ['todolist' => $todolist])}}">Edit</a>
                    </td>
                </tr>
            @endforeach
            </table>
        
    
  </body>
</html>
