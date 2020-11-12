<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

	<div class="container">
		<form action="{{ route('adminupdate') }}" method="POST">
			@csrf
			@if(auth()->user()->id == $product->user_id)
            	<input type="hidden" name="id" value="{{ $product->id }}">
				<input type="text"  name="title" placeholder="{{ $product->title }}">
				<input type="text"  name="short_desc" placeholder="{{ $product->description }}">

				<button class="btn btn-primary">Update</button>
            @else
    			
            @endif
		</form>
	</div>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>	

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>

