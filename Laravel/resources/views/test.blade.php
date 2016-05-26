@extends('layouts.sample')


{{-- header --}}
@section('user_info')
	{{$user_name}}さん、ようこそ。
@endsection


{{-- content --}}
@section('content')
	<div class="page_info">
		テストです。
	</div>
	<div class="item-list">
	<ul>
	    @foreach ($num as $value)
	    	<li>{{$value}}</li>
	    @endforeach
	</ul>         
	</div>
@endsection


{{-- footer --}}
@section('footer')

@@parent {{-- <- これを書くことで親で表示している内容が継承されます --}}

	<div>
		ページ毎で違う内容	
		<ul>
			<li>TOP</li>
			<li>規約</li>
			<li>お問い合わせ</li>
			<li>運営会社について</li>	
		</ul>
	</div>

@endsection