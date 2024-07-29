<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;

class TodolistController extends Controller
{   
    public function index(){
     return view('todolist.index');         
    }
    public function create(){
     return view('todolist.create');
}
public function store(Request $request){
   $data = $request->validate([
            'inputTitle' => 'required',
            'task' => 'required',
            'description' => 'required'
            ]);  
            
            $newTodolist = Todolist::create($data);
           
            return redirect(route('todolist.create'));
}
public function mytasks(){
    $todolists = Todolist::all();
     return view('todolist.mytasks', ['todolists' => $todolists]);         
    }

    public function edit(Todolist $todolist){
        return view('todolist.edit', ['todolist' => $todolist]);
 }

 public function update(Todolist $todolist, Request $request){
        $data = $request->validate([
            'inputTitle' => 'required',
            'task' => 'required',
            'description' => 'required'
        ]);

        $todolist->update($data);

        return redirect(route('todolist.mytasks'))->with('success', 'Todolist Updated Successfully');

    }

    public function destroy(Todolist $todolist){
        $todolist->delete();
        return redirect(route('todolist.mytasks'))->with('success', 'Task deleted Successfully');
    }

    public function irrelevant(){
    $todolists = Todolist::all();
     return view('todolist.irrelevant', ['todolists' => $todolists]);         
    }
}
