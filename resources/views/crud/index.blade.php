@extends('layouts.app')

@section('content')
<div class="container " style="margin-top: 70px; margin-bottom: 70px;">
    <h1>Dashboard</h1>
    @foreach ($todos as $todo)
    <div class="row mt-3 justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                   <div class="btn-group" role="group">
                        <a href="{{ route('todo.edit', $todo->id)}}">
                            <button class="btn btn-warning me-2">Edit</button>
                        </a>
                    
                        <form action="{{ route('todo.destroy', $todo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger me-2" onclick="return confirm('Do you wanna delete this news post?')" >Delete</button>
                        </form>
                   </div>
                            
                    
                Category: <b>{{$todo->category->name}}</b>, created by  {{$todo->user->name}}
                 
                  
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-1">
                    <p>{{$todo->title}}</p>
                    <footer class="blockquote-footer">{{substr($todo->body,0,300)}} <cite title="Source Title"><a href="{{route('home.post', $todo->id)}}">see more...</a></cite></footer>
                  </blockquote>
                </div>
              </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
