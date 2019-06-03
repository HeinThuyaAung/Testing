<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<form method="post" enctype="multipart/form-data" action="{{ route('categories.store') }}">
			<!-- @foreach($errors->all() as $message)
				<h1>{{ $message }}</h1>
				@endforeach -->
				@csrf
				<div class="form-group">
					<label for="name">Name :</label>
					<input name="name" type="text" class="form-control" id="category_name" placeholder="You Name" value="{{ old('name') }}">
					@if($errors->has("name"))
					<small class="form-text text-danger">
						{{ $errors->first('name') }}
					</small>
					@endif

				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Example select</label>
					<select name="type" class="form-control" id="category_type">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="form-group">
					<label for="sdate">Start Date :</label>
					<input name="date" type="date" class="form-control" id="category_date" placeholder="Date" value="{{ old('date') }}">
					@if($errors->has("date"))
					<small class="form-text text-danger">
						{{ $errors->first('date') }}
					</small>
					@endif

				</div>
				<div class="form-group">
                 <input id="avatar" type="file" class="form-control" name="avatar">
              </div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</body>
	</html>