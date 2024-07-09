<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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

//dd($table);
        // Trả về view dashboard với danh sách các task
        return view('user.dashboard', ['listTable' => $table], ['totalCounts' => $totalCounts,'countdone' => $countdone,'counttodo' => $counttodo,'countip' => $countip]);
    }

//        return view('user.dashboard',['listTask'=> $tasks]);

}
