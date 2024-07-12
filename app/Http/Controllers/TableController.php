<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Task;
use App\Models\TaskRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TableController extends Controller
{
    public function taskList(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $user = Auth::user();

        if (!$user) {
            // Nếu không có người dùng đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login');
        }

        // Lấy danh sách task của người dùng
        $table = Table::where('owner_id', $user->id)->with('taskRecord.task')->get();
//        dd($table);
        // Trả về view dashboard với danh sách các task
        return view('user.table.table', ['listTable' => $table]);
    }

    public function search(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {        $user = Auth::user();

        $search = $request->input('search');
            $table = Table::where('owner_id', $user->id)
        ->where('table_name', 'like', '%' . $search . '%')->with('taskRecord.task')->get();
//        dd($table);
        return view('user.search.search_table', ['tables' => $table]);

    }
    function addTable(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('user.table.add_table');
    }
    public function storeTable(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $table = new Table();
        $table->table_name = $validatedData['name'];
        $table->owner_id=$user->id;
//        dd($table);
        $table->save();

        $record = new TaskRecord();
        $record->table_id = $table->table_id;
        $record->save();
        // Redirect to a confirmation page or somewhere els
        return redirect()->route('user.table')->with('success', 'Task added successfully!');
    }
}
