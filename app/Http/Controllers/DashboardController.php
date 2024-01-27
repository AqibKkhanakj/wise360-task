<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showdashboard(){
        $user = User::find(session()->get('id'));
        return view('dashboard', compact('user'));
    }
    public function index(Request $request){
        $user = User::orderBy('name','ASC')->get();
        $data ['user'] = $user;
        return view ('layout.userlist', $data);
    }
    //Task create show
    public function creatTask(){
        $user = User::orderBy('name','ASC')->get();
        $data ['user'] = $user;
        return view ('task', $data);
    }
    //Task assign/send function
    public function tasksubmit(Request $request){
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->user_id = $request->user_id;
        $task->save();
        return redirect()->route('tasklist.show')->with('Message', 'Good Job! Task has been assigned');
    }
    //Task list show function
    public function tasklist(){
        $task = Task::orderBy('title','ASC')->join('users', 'tasks.user_id', '=', 'users.id')->select('tasks.*', 'users.name')->get();
        $data ['task'] = $task;
        return view('layout.tasklist', $data);
    }
}
