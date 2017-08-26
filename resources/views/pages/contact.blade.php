@extends ('layouts.app')

@section ('content')

<h3 style="text-align:center;">Contact Me</h3>

<br>

<div class="container">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p>NOTE: We respect your privacy.  We do not share your information with anyone. Your message will not be encrypted.</p>

			@include('layouts.errors')
			@include('layouts.success')
			
			<form method="POST" action="{{ url('contact') }}">
				{{csrf_field()}}
				<div class="form-group">
					<label name="email">Email</label>
					<input id="email" name="email" class="form-control" placeholder="Type your email here . . .">
				</div>
				<div class="form-group">
					<label name="subject">Subject</label>
					<input id="subject" name="subject" class="form-control" placeholder="Type your subject here . . .">
				</div>
				<div class="form-group">
					<label name="message">Message</label>
					<textarea id="message" name="message" class="form-control" placeholder="Type your message here . . ."></textarea>
				</div>
				<input type="submit" value="Send Message" name="submit" class="btn btn-success">
			</form>
		</div>
	</div>
</div>

@endsection