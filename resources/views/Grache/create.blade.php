@extends('layouts.master')

@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Create New Grache</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">New Grache</h5>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form method="POST" action="{{ route('Grache.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Grache Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Grache addresss</label>
                                <input type="text" name="addresss" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Grache Mobile</label>
                                <input type="text" name="mobile" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Grache Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">places available</label>
                                <input type="number" name="places" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Notes</label>
                                <textarea name="Notes" class="form-control" id="notes" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Save" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
