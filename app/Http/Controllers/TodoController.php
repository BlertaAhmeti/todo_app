<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoController extends Controller
{
    //
    public function __construct(){
        return $this->middleware(['auth']);
    }

    public function index(){
     
          $tasks=Task::latest()->get();
        return view('todos.index', [
            'tasks'=>$tasks,
        ]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'title'=>'required',
            'body'=>'required',
        ]);


        $request->user()->tasks()->create([
            //user_id meret automatikisht
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back();
    }


    //delete a task
    public function destroy(Task $task){
        $task->delete();
        return back();
    }

      //update a task
      public function update(Request $request, Task $task){

        if($task->status== 0){
        $request->user()->tasks()->update([
            //user_id meret automatikisht
            'status'=>1, 
        ]);
        }

        else{
            $request->user()->tasks()->update([
                //user_id meret automatikisht
                'status'=>0, 
            ]);
        }
        
        
        return back();
    }
    


    public function viewProgress(){
        $tasks=Task::latest()->get();
        return view('todos.progress', [
            'tasks'=>$tasks,
        ]);
  }
}
