<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskListController extends Controller
{
    public function taskList(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $user = Auth::user();

        if (!$user) {
            // Nếu không có người dùng đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login');
        }

        // Lấy danh sách task của người dùng
        $table =Table::where('owner_id', $user->id)->with('taskRecord.task')->get();
        $countdone = Task::where('status', 'done')
            ->where('owner_id', $user->id)
            ->count();
        $counttodo = Task::where('status', 'todo')
            ->where('owner_id', $user->id)
            ->count();
        $countip = Task::where('status', 'inprocess')
            ->where('owner_id', $user->id)
            ->count();
        $totalCounts = $countdone + $counttodo + $countip;
        // Trả về view dashboard với danh sách các task
        return view('user.task.tasklist', ['listTable' => $table], ['totalCounts' => $totalCounts,'countdone' => $countdone,'counttodo' => $counttodo,'countip' => $countip]);
    }

    public function search(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $user = Auth::user();

        $search = $request->input('search');
        $task = Task::where('owner_id', $user->id)->where('title', 'like', '%' . $search . '%')->get();
//        dd($task);
        return view('user.search.search_task', ['tasks' => $task]);
    }

    function addTask()
    {
        $user = Auth::user();
        $table =Table::where('owner_id', $user->id)->get();
        return view('user.task.add_task',['tables' => $table]);
    }
    public function storeTask(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = Auth::user();

        $validatedData = $request->validate([

            'title' => 'required|string|max:255',
            'discription' => 'required|string|max:255',
            'deadline' => 'required|date',
            'priority' => 'required|integer|min:1|max:3',
            'table' => 'required|integer',
            'status' => 'required|string|in:todo,inprocess,done',
        ]);

        $task = new Task();
        $task->title = $validatedData['title'];
        $task->description = $validatedData['discription'];
        $task->deadline = $validatedData['deadline'];
        $task->status = $validatedData['status'];
        $task->task_record_id =$validatedData['table'];
        $task->priority = $validatedData['priority'];
        $task->owner_id=$user->id;
        $task->save();

        // Redirect to a confirmation page or somewhere els
        return redirect()->route('user.tasklist')->with('success', 'Task added successfully!');
    }
    public function destroy($task_id): \Illuminate\Http\RedirectResponse
    {
        $task = Task::find($task_id);
        $task->delete();
        return redirect()->route('user.tasklist');
    }

    function formUpdate($task_id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $user = Auth::user();
        $task=Task::where('task_id','=',$task_id)->get()[0];
        $table =Table::where('owner_id', $user->id)->get();
        return view('user.task.update', ['task' => $task,'tables' => $table]);
    }
    public function update(Request $request, $task_id): \Illuminate\Http\RedirectResponse
    {
//        dd($request);
        $input = $request->all();
        $task = Task::find($task_id);
        $task['title'] = $input['title'];
        $task['description'] = $input['discription'];
        $task['deadline'] = $input['deadline'];
        $task['status'] = $input['status'];
        $task['task_record_id'] =  $input['table'];
        $task['priority'] =  $input['priority'];

        $task->save();
        return redirect()->route("user.tasklist");
    }


}
