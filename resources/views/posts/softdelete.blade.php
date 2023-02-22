<h1>All Posts is SoftDeleted</h1>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>

          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($posts as $post)


            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$post->title}} </td>
            <td>{{$post->body}}</td>
           <td>
             <a class="btn btn-primary" href="{{route('posts.restore' ,$post->id)}}" role="button">Restore</a>
             <form action="{{route('posts.finaldelete' ,$post->id)}}" method="post">
                @method('GET')
                @csrf
          <button type="submit" >FinalDelete</button>
             </form>
        </td>
          </tr>
          @endforeach
        </tbody>
      </table>





