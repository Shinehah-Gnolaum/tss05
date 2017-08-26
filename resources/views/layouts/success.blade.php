@if(Session::get('flash-message'))
	<div class="alert alert-info alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
		<p>{{ Session::get('flash-message') }}</p>
	</div>
@endif
