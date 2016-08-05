@extends('layouts.app')


@section('content')

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Articles</div>
                    <div class="panel-body">

<h1>Create Article</h1>
<hr>


{!! Form::open(['url' => 'article']) !!}

	@include('articles._form',['submitButtonText'=>'Add Article'])
	
{!! Form::close() !!}

	
	@include('errors.list')

                    </div>
                </div>
            </div>
        </div>


@stop