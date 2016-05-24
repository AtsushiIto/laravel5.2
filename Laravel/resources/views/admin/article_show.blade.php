@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <a class="btn btn-default" href="{{ url('/'.env('DIR_ROOT_AUTH').'/article/'.$article['id'].'/edit') }}" role="button">edit article</a>
            <div class="panel panel-default">
                <div class="panel-heading">Detail article</div>
                <div class="panel-body">
                    <div>{{ $article['title'] }}</div>
                    <div>{{ $article['body'] }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
