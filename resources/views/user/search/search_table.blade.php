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
                        <a href="{{route('user.table')}}">Table</a>><a>Search Table</a>
                    </h2>

                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="d-flex">
                        <div class="me-3">
                            <div class="input-icon">
                                <form action="{{route('search_table')}}" class="searchbox" method="GET">

                                    <input type="text" value="" class="form-control" placeholder="Search…" name="search">
                                    <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                      </span>
                                </form>
                            </div>
                        </div>
                        <a href="{{route('add_task')}}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Add table
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @foreach($tables as $table)
            <?php $isFirstTask = true; ?>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    @if($isFirstTask)
                        <h3 class="card-title">
                            {{$table->table_name}}
                        </h3>
                            <?php $isFirstTask = false; ?>
                        <div class="card-actions">
                            <a href="#">
                                Edit table<!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <dl class="row">
                        <table class="table card-table table-vcenter text-nowrap datatable">
                            <thead>
                            <tr>
                                <th>Task</th>
                                <th>Description</th>
                                <th>Deadline</th>
                                <th>Priority</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table->taskRecord->task as $task)


                                <tr>
                                    <td><span class="text-muted">{{$task->title}}</span></td>
                                    <td><span  class="text-reset" tabindex="-1">{{$task->description}}</span></td>
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

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    @endforeach

@endsection
