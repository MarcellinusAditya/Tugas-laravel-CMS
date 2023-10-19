@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Update News Post</h1>
        <form action="{{route('todo.update', $todo->id)}}" method="POST">
            @method('put')
            @csrf
                    <input type="hidden" name="users_id" @auth
                    value="{{Auth::user()->id}}" @endauth ><br />
                    
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <textarea class="form-control" id="title" name="title" rows="3">{{$todo->title}}</textarea>
                    @error('title')
                            <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" id="body" name="body" rows="8">{{$todo->body}}</textarea>
                    @error('body')
                            <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="categories_id" class="form-select" aria-label="Default select example">
                        <option value="{{$todo->category->id}}" selected="selected" hidden>{{$todo->category->name}}</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                    </select>
                    @error('categories_id')
                            <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                        @enderror
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        
         
    </div>
@endsection

