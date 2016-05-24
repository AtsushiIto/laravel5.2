@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <a class="btn btn-default" href="{{ url('/'.env('DIR_ROOT_AUTH').'/tag/create') }}" role="button">create new tag</a>
            <div class="panel panel-default">

                <div class="panel-heading">Tag Index</div>

                <div class="panel-body">
                    @foreach ($tags as $tag)
                        <li>
                            {{ $tag->id }} / {{ $tag->name }} / {{ $tag->description }} / 
                            @if (count($tag->related)>0)
                                related : 
                                @foreach ($tag->related as $related)
                                    {{$related['id']}} - {{$related['name']}} | 
                                @endforeach
                                
                            @endif
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
