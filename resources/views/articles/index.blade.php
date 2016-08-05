@extends('layouts.app')

@section('content')


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Articles</div>
                    <div class="panel-body">

        @foreach($articles as $a)
            <article>
                <h2><a href="{{ action('ArticleController@show',[ $a->id ])}}">{{ $a->title }}</a></h2>
                <div class="body"> {{ $a->body }}</div>
            </article>
        @endforeach

                    </div>
                </div>
            </div>
        </div>

@stop

