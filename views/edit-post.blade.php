<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Post</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							Edit Post
						</div>
						<div class="card-body">
							@if(Session::has('post_updated'))
								<div class="alert alert-success" role="alert">
								{{Session::get('post_updated')}}
								</div>
							@endif
							<form method="POST" action="{{route('post.update')}}">
								@csrf
								<input type="hidden" name="id" value="{{$post->id}}"/>
								<div class="form-group">
									<label for="title">Post Title</label>
									<input type="text" name="title" class="form-control" placeholder="Enter Post Title" value="{{$post->title}}" />
								</div>
								<div class="form-group">
									<label for="body"> Post Description</label>
									<textarea name="body" class="form-control" rows="3">{{$post->body}}</textarea>
								</div>
								<button type="submit" class="btn btn-success"> Update Post </button>
							</form>
						</div>
					</div>
				</div>
		    </div>
		</div>



	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	
</html>