@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <a class="btn btn-default" href="{{ url('/'.env('DIR_ROOT_AUTH').'/category/create') }}" role="button">create new category</a>
            <div class="panel panel-default">

                <div class="panel-heading">category Index</div>

                <div class="panel-body">
                    @foreach ($categories as $category)
                        <li>
                            {{ $category->id }} / {{ $category->name }} / {{ $category->description }} 
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
