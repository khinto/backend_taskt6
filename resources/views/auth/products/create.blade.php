<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>



	<form method="POST" action="{{ route('product.store') }}">
		
		

		@csrf



		<input type="text" name="title" >
		
		
		

		

		<textarea name="short_desc" placeholder="descrition"></textarea>
		


		
		<button>Save</button>




	</form>








</body>
</html>