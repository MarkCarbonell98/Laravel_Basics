@extends("layout.app");

@section("content")
    <h1>this is the contact page page</h1>
    @if(count($list))
        <ul>
            @foreach($list as $individual)
                <li>{{$individual}}</li>
            @endforeach
        </ul>
    @endif


@stop


@section("footer")
    <h2>This is the contact footer</h2>
@stop