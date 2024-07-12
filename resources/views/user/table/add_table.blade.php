@extends('layouts.managerlayout')
@section("content")
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        <a href="{{route('user.table')}}">Table</a>><a>Add Table</a>
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
        <form method="POST" action="{{ route('store_table')}}">
            @csrf
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-md-6 col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Input Name Table">
                            </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" onclick="history.back()">Cancel</button>
                            <button type="submit" class="btn btn-primary mr-2">Add</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection
