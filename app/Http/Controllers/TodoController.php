<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class todoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }
    public function create(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update(TodoRequest $request)
    {
        unset($form['_token']);
        $form = $request->all();
        Todo::where($request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $todos = Todo::find($request->id);
        $todos->delete();
        return redirect('/');
    }
}