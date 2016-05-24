@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User Index</div>

                <div class="panel-body">
                    @foreach ($users as $user)
                        <li>{{ $user->id }} / {{ $user->name }} / {{ $user->email }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
