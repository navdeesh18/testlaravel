@extends('layouts.app')

@section('content')

<div class="container">
	
	<form action="{{route('avatar.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text">Why this</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" name="avatar" class="custom-file-input" id="avatar">
		    <label class="custom-file-label" for="avatar">Choose file</label>
		  </div>
		  <input type="submit" value="Upload" class="btn btn-success">
		</div>
	</form>

	@foreach ($avatar as $element)
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{$element->getUrl('thumb')}}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>

	@endforeach
</div>

@endsection