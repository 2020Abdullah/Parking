@extends('layouts.master')

@section('content')
<div class="container-fluid p-0">
    <div class="table-action mb-3">
        <h2 class="h3 mb-3">All Graches</h2>
        <a class="btn btn-outline-success" href="{{ route('Grache.create') }}">Create New Grache</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>Grache Name</td>
                        <td>Grache Address</td>
                        <td>Grache Phone</td>
                        <td>places available</td>
                        <td>status</td>
                        <td>Notes</td>
                    </tr>
                    @forelse ($graches as $grache)
                        <tr>
                            <td>{{ $grache->name }}</td>
                            <td>{{ $grache->addresss }}</td>
                            <td>{{ $grache->mobile }}</td>
                            <td>{{ $grache->places_available }}</td>
                            <td>{{ $grache->status == 1 ? 'مفتوح' : 'مغلق'}}</td>
                            <td>{{ $grache->Notes }}</td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="6">لا يوجد اى بيانات مضافة</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
