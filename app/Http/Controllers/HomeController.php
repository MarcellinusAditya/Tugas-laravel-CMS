<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $todo;
    public function __construct(News $todo)
    {
        $this->middleware('auth');
        $this->todo = $todo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $todos = $this->todo->get();

        return view('home', compact('todos'));
    }

    public function post(string $id){
        $todo = $this->todo->find($id);
        return view('post', compact('todo'));
    }
}
