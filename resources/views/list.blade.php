@extends('app')

@section('content')
<div class="container">
	                @foreach($imgs as $img)
                        <img src="{{($img)}}" width="150px">
                    @endforeach
</div>
@endsection
