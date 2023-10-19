@extends('layouts.app')

@section('content')
<div class="container " style="margin-top: 70px; margin-bottom: 70px;">
    <div class="row mt-3 justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                 Category: <b>{{$todo->category->name}}</b>, created by  {{$todo->user->name}}
                  
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-1">
                    <p style="text-align:center; font-size: 50px;">{{$todo->title}}</p>
                    <footer class="blockquote-footer">{{$todo->body}} 
                        {{-- <cite title="Source Title"><a href="{{route('home.post', $todo->id)}}">see more...</a></cite> --}}
                    </footer>
                  </blockquote>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
