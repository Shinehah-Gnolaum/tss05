<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>

	<h3>You have a new contact from: {{ $request->email }}.</h3>

	<div>
		<h4>Subject:</h4>
		<p>{{ $request->subject }}</p>
	</div>

	<div>
		<h4>Message:</h4>
		<p>{{ $request->message }}</p>
	</div>

</body>
</html>

