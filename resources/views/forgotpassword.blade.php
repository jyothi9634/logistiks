<html>
<head>
	</head>
	<body>
		<h2>Forgot Password</h2>
		<form action="/sendMail" id="forgot_id" name="forgot_id">
		<table>
			Please enter your emaild :
			<input type="text" id="email_id" name="email_id"></br></br>
			@if($errors->any())
              <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
              @endif
			<input type="submit" id="submit_id" name="submit_id"></br></br>
		</table>
	</form>
	</body>
</html>