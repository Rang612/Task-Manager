@extends('layouts.managerlayout')
@section("content")
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    {{--                    <div class="page-pretitle">--}}
                    {{--                        welcome--}}
                    {{--                    </div>--}}
                    <h2 class="page-title">
                        <a href="{{route('user.tasklist')}}">Task List</a> > <a>Search Task</a>
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="d-flex">
                        <div class="me-3">
                            <div class="input-icon">
                                <form action="/search_task" class="searchbox" method="GET">

                                    <input type="text" value="" class="form-control" placeholder="Search…" name="search">
                                    <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                      </span>
                                </form>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Add task
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Task List</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                            <tr>
                                <th>Task</th>
                                <th>Description</th>
                                <th>Table</th>
                                <th>Deadline</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Option</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)

                                    <tr>
                                        <td><span class="text-muted">{{$task->title}}</span></td>
                                        <td><span  class="text-reset" tabindex="-1">{{$task->description}}</span></td>
                                        <td><span class="text-muted">{{$task->taskRecord->table->table_name}}</span></td>

                                        <td><span class="text-muted">{{$task->deadline}}</span></td>
                                        <td><span class="text-muted">{{$task->priority}}</span></td>
                                        @if($task->status == "inprocess")
                                            <td>
                                                <span class="badge bg-success me-1"></span> Processing
                                            </td>
                                        @elseif($task->status == "todo")
                                            <td>
                                                <span class="badge bg-warning me-1"></span> To Do
                                            </td>
                                        @else
                                            <td>
                                                <span class="badge bg-secondary me-1"></span> Done
                                            </td>
                                        @endif
                                        <td>
                                            <a href="/update_form_task/{{$task->task_id}}">
                                                <button> <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg></button>
                                            </a>
                                            <form action="{{ route('destroy_task', $task->task_id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
@endsection
