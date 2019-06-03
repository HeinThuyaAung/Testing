<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<br>
				<br>
				<a class="btn btn-success" href="{{ route('categories.create') }}">Create Categories</a>
				<hr>
				<div class="window">
					<!-- @foreach($categories as $category)
							<img class="card-img-top" style="max-height:10rem;"  src="{{ $category->media[0]->getUrl() }}" alt="Card image cap">
						@endforeach  -->
				@if($categories->count() > 0)
					<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Type</th>
							<th>Date</th>
							<th>Photo</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr>
								
								
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->type }}</td>
								<td>{{ $category->date }}</td>
								<td><img class="card-img-top" style="max-height:10rem;"  src="{{ $category->media[0]->getUrl() }}" alt="Card image cap"></td>
								<td><a href="{{ route('categories.edit', $category->id) }}"><button class="btn btn-primary">Edit</button></a></td>
								<td>
									<form method="post" action="{{ route('categories.destroy', $category->id) }}">
										@method('delete')
    									@csrf
									<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
									
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $categories->links() }}
				
				@else
					<h2>No Categories</h2>
				@endif
				
			</div>
		</div>
	</div>
	
</body>
</html>