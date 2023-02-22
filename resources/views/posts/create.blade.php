<h1>
    please inter this data
</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('posts.store')}}" method="Post">
    @csrf
  <input type="text" name="title"  value="{{old('title')}}" placeholder="inter title"><br><br>

    <input type="text" name="body"  value="{{old('body')}}" placeholder="inter body"><br><br>
  <input type="submit" name="submit">
</form>
