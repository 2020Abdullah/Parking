@extends('layouts.app')

@section('content')
 <div class="container ticket">
    <div class="card text-center">
        <div class="card-header">
            <h2>ticket successfly</h2>
        </div>
        <div class="card-body">
            <div id="ticket_info">
                <h3>ticket</h3>
                @php
                    $ticket = 'code:' . $last_ticket->code  . ' | Name: ' . $last_ticket->fullName . ' | phone: ' . $last_ticket->phone . ' | date: ' . $last_ticket->date . ' | time: ' . $last_ticket->time;   
                @endphp
                {!! QrCode::size(300)->generate($ticket) !!}
            </div>
            <div class="print mt-3">
                <a href="#" class="btn btn-success" id="print_btn">print ticket</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('#print_btn').on('click', function(e){
        e.preventDefault();
        var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write($('#ticket_info').html());
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    })
</script>
@endsection