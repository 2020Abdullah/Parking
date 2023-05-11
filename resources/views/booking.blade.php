@extends('layouts.app')

@section('content')
    	<div id="booking" style="background-image: url({{ asset('img/photos/parking.jpg') }})" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h2>Book a Parking car</h2>
						</div>
						<form method="POST" class="formBooking" action="{{route('booking.store')}}">
                            @csrf
                            <div class="form-group">
                                <span class="form-label">Your Full Name</span>
                                <input class="form-control" type="text" name="fullName" placeholder="Enter your name">
                            </div>
							<div class="form-group">
								<span class="form-label">Your Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter your phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Grache</span>
                                <select name="Grache_id" class="form-select" id="Grache">
									<option>...</option>
                                    @foreach ($graches as $grache)
                                        <option value="{{ $grache->id }}">{{ $grache->name }}</option>                                        
                                    @endforeach
                                </select>
							</div>
							<div class="form-group">
								<span class="form-label">Places Available</span>
                                <div class="places"></div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">booking Date</span>
										<input class="form-control" name="date" type="date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">time</span>
										<input type="time" class="form-control" name="time">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<span class="form-label">notes</span>
										<textarea name="notes" class="form-control" cols="10" rows="10"></textarea>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button type="submit" class="submit-btn">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script>
    $(function(){
   
		$('#Grache').on('change', function(){

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
				}
			});

			var formData = {
				Grache_id: $('#Grache').val(),
			};

			$.ajax({
				type: "POST",
				url: '{{ route('booking.getPlaces') }}',
				data: formData,
				dataType: 'json',
				success: function(response){
					$('.places').empty();
					$.each(response, function(index, data){
						if(data.status == 1){
							$('.places').append(`
							<div class="box">
								<input type="radio" data-status="1" name="place_id" disabled="disabled" class="place">
								<img class="img-fluid" src="{{ URL::asset('/img/photos/car.png') }}">
							</div>
							`);
						}
						else {
							$('.places').append(`
							<div class="box">
								<input type="radio" value="${data.id}" name="place_id" class="place">
							</div>
							`)
						}
					})
					$('.place').on('change', function(){
						if($(this).attr('data-status') == 1){
							$(this).parent().removeClass('checked');
						}
						else {
							$(this).parent().addClass('checked');
							$(this).not(':disabled').parent().addClass('checked')
						}
					})
				},
				error: function(data){
					console.log(data)
				}
			})

		})

    })
</script>
@endsection