@extends('layouts.master')

@section('content')
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Dashboard</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title mb-0">عدد الجراشات</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('Grache.index') }}">
                        <h3>{{ $graches_count }}</h3>                        
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
