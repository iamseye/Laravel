@extends('layouts.app')


@section('content')

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Articles</div>
					<div class="panel-body">

<h1>{{$articles->title}}</h1>

<article>
		{{$articles->body}}
		<br>

		{{$articles->published_at}}

</article>

					</div>
				</div>
			</div>
		</div>

@stop