<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Post</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							All Post <a href="/add-post" class="btn btn-success">Add New Post</a>
						</div>
						<div class="card-body">
							@if(Session::has('post_deleted'))
							    <div class="alert alert-success" role="alert">
							    	{{Session::get('post_deleted')}}
							    </div>
							 @endif   
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Post Title</th>
										<th>Post Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($posts as $post)
									<tr>
										<td>{{$post->id}}</td>
										<td>{{$post->title}}</td>
										<td>{{$post->body}}</td>
										<td>
											<a href="/posts/{{$post->id}}" class="btn btn-info">Views</a>
											<a href="/edit-post/{{$post->id}}" class="btn btn-success">Edit</a>
											<a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
		    </div>
		</div>

	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	
</html>