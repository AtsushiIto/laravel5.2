@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <a class="btn btn-default" href="{{ url('/'.env('DIR_ROOT_AUTH').'/article/create') }}" role="button">create new article</a>
            <div class="panel panel-default">

                <div class="panel-heading">Article Index</div>

                <div class="panel-body">
                    @foreach ($articles as $article)
                        <li>
                            <a href="{{ url('/'.env('DIR_ROOT_AUTH').'/article/'.$article->id) }}">{{ $article->id }} / {{ $article->title }} / {{ str_limit($article->body, $limit=120, $end=' ...') }}</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
