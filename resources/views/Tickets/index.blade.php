@extends('layouts.master')

@section('content')
<div class="container-fluid p-0">
    <div class="table-action mb-3">
        <h2 class="h3 mb-3">All Tickets</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>code</td>
                        <td>Name</td>
                        <td>phone</td>
                        <td>date</td>
                        <td>time</td>
                        <td>Grache</td>
                        <td>Place</td>
                    </tr>
                    @forelse ($Tickets as $Ticket)
                        <tr>
                            <td>{{ $Ticket->code }}</td>
                            <td>{{ $Ticket->fullName }}</td>
                            <td>{{ $Ticket->phone }}</td>
                            <td>{{ $Ticket->date }}</td>
                            <td>{{ $Ticket->time }}</td>
                            <td>{{ $Ticket->Place->Grache->name }}</td>
                            <td>{{ $Ticket->Place->name }}</td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="7">لا يوجد اى بيانات مضافة</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
