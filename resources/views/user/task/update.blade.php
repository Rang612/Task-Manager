@extends('layouts.managerlayout')
@section("content")
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        <a href="{{route('user.tasklist')}}">Task List</a>><a>Edit Task</a>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('update_task', $task->task_id)}}">
            @csrf
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Input Title/ Name Task" value="{{$task->title}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deadline</label>
                                <div class="input-icon mb-2">
                                    <input class="form-control " placeholder="Select a date" id="deadline" name="deadline" value="{{$task->deadline}}"/>
                                    <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                              </span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Priority</div>
                                <select class="form-select" name="priority" id="priority" value="{{$task->priority}}" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-secondary" onclick="history.back()">Cancel</button>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mr-2">Update</button>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="discription" id="discription" placeholder="Input Description" value="{{$task->description}}">
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Table</div>
                                <select class="form-select" name="table" id="table" value="{{$task->taskRecord->table->table_name}}">
                                    @foreach($tables as $table)
                                        <option value="{{$table->table_id}}">{{$table->table_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Status</div>
                                <div>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                               name="status" id="status" value="todo">
                                        <span class="form-check-label" >To Do</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                               name="status" id="status"  value="inprocess" >
                                        <span class="form-check-label">Processing</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"
                                               name="status" id="status" value="done" >
                                        <span class="form-check-label">Done</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
