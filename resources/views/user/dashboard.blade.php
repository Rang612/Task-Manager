{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
@extends('layouts.managerlayout')

@section("content")
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        welcome
                    </div>
                    <h2 class="page-title">
                        Home
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class=" text-red h1">Total</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 ">{{$totalCounts}}</div>
                                <div class="me-auto">
                        <span class="text-red d-inline-flex align-items-center lh-1">
                         Task <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sum"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 16v2a1 1 0 0 1 -1 1h-11l6 -7l-6 -7h11a1 1 0 0 1 1 1v2" /></svg>                        </span>
                                </div>
                            </div>
                        </div>
{{--                        <div id="chart-revenue-bg" class="chart-sm"></div>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="text-green h1">In Progress</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-0 me-2 ">{{$countip}}</div>
                                <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                         Task <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                                </div>
                            </div>
                        </div>
{{--                        <div id="chart-revenue-bg" class="chart-sm"></div>--}}
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="text-yellow h1 ">To Do</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">{{$counttodo}}</div>
                                <div class="me-auto">
                        <span class="text-yellow d-inline-flex align-items-center lh-1">
                          Task <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-book"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6l0 13" /><path d="M12 6l0 13" /><path d="M21 6l0 13" /></svg>                        </span>
                                </div>
                            </div>
{{--                            <div id="chart-new-clients" class="chart-sm"></div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class=" text-blue h1">Done</div>
                            </div>
                            <div class="d-flex align-items-baseline">
                                <div class="h1 mb-3 me-2">{{$countdone}}</div>
                                <div class="me-auto">
                        <span class="text-blue d-inline-flex align-items-center lh-1">
                          Task <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-rosette-discount-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" /><path d="M9 12l2 2l4 -4" /></svg>                        </span>
                                </div>
                            </div>
{{--                            <div id="chart-active-users" class="chart-sm"></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listTable as $table)

{{--                            @foreach($item->table as $table)--}}
                                @foreach($table->taskRecord->task as $task)


                                    <tr>
                            <td><span class="text-muted">{{$task->title}}</span></td>
                            <td><span  class="text-reset" tabindex="-1">{{$task->description}}</span></td>
                                <td><span class="text-muted">{{$table->table_name}}</span></td>

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
                            @endforeach
{{--                        @endforeach--}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
