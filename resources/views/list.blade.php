@extends('app')

@section('content')
<div class="container">
	                @foreach($imgs as $img)
	                {{var_dump($img)}}
                        <img src="{{($img)}}" width="150px">
                    @endforeach
    lolll
</div>
@endsection
