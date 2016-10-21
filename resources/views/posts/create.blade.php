@extends('main')

@section('title','Contact')

@section('stylesheet')
  <style type="text/css">
  	input[type=submit]{
  		margin-top:1em; 
  	}
  </style>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create a new post</h1>
			<hr>
			<!-- this form feature required to be installed check: laravelcollective.com-->
			{!! Form::open(['route' => 'posts.store']) !!}
    			{{Form::label('title', 'Title:')}}
				{{Form::text('title',null,array('class'=>'form-control')) }}
				
				{{Form::label('body', 'Body:')}}
				{{Form::textarea('body',null,array('class'=>'form-control'))}}
				
				{{Form::submit('Send post',array('class'=>'btn btn-success btn-lg btn-block'))}}
			{!! Form::close() !!}
		</div>
	</div>


@endsection
