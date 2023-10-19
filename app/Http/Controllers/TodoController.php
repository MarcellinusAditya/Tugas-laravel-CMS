<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TodoRequest;
use Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $todo;
    protected $todoService;

    public function __construct(News $todo, )
    {
        $this->middleware('auth');
        $this->todo = $todo;
    }

    public function index()
    {
        $id=Auth::id();
        $todos=$this->todo->where('users_id',$id)->get();
        
        return view('crud.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('crud.create', ['categories' => $categories]);
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $request)
    {
        $input = $request->all();
        $todo = new News();
        $todo->users_id = $input['users_id'];
        $todo->title = $input['title'];
        $todo->body = $input['body'];
        $todo->categories_id = $input['categories_id'];
        $todo->save();

        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = DB::table('categories')->get();
        $todo= $this ->todo->find($id);
        return view('crud.edit')->with('categories',$categories)->with('todo',$todo);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TodoRequest $request, string $id)
    {
        $input = $request->all();
        $todo = $this->todo->find($id);
        $todo->users_id = $input['users_id'];
        $todo->title = $input['title'];
        $todo->body = $input['body'];
        $todo->categories_id = $input['categories_id'];
        $todo->save();

        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = $this->todo->find($id);
        $todo->delete();
        echo"<script>alert('News Post Deleted')</script>";
        return redirect()->route('todo.index');
    }
}
