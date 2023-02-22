<h1>
    look which values want to edit
</h1>
<form action="{{route('posts.update',$post->id)}}" method="Post">
  @method('PUT')
    @csrf
    <input type="text" name="title" value="{{$post->title}}"><br><br>
    <input type="text" name="body" value="{{$post->body}}"><br><br>
    <input type="submit" name="submit">

</form>
