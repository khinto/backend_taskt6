s<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<table class="table">
			<tr>
				<td>#</td>
				<td>სახელი</td>
				<td>აღწერა</td>
				<td>მოქმედება</td>
			</tr>
			@foreach ($product as $element)
				<tr>
					<td>{{ ++$loop->index }}</td>
					<td>{{ $element->title }}</td>
					<td>{{ $element->description }}</td>
					<td>
						<form action="{{ route('admindelete') }}" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{ $element->id }}">
							<button class="btn btn-danger">
								წაშლა
							</button>
						</form>
						<a href="{{ route('adminedit',["id"=>$element->id ]) }}" class="btn btn-warning">
							განახლება
						</a>
						
					</td>
				</tr>
			@endforeach
		</table>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>