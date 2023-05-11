@extends('layouts.master')

@section('content')
<div class="container-fluid p-0">
    <div class="table-action mb-3">
        <h2 class="h3 mb-3">All Places</h2>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#create-place" data-bs-whatever="@getbootstrap">Create New Place</button>
        @include('Places.create')
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>place Name</td>
                        <td>Grache Name</td>
                        <td>status</td>
                    </tr>
                    @forelse ($places as $place)
                        <tr>
                            <td>{{ $place->name }}</td>
                            <td>{{ $place->Grache->name }}</td>
                            <td>{{ $place->status == 0 ? 'متوفر' : 'محجوز'}}</td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="3">لا يوجد اى بيانات مضافة</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
