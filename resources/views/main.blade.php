@extends("layout.landing")

@section("header")
    <h1>I am the header from main</h1>
    <h2>{{$id}}</h2>
@stop


@section("main")
    <h1>I am the main from main</h1>
    @foreach($data as $key => $value) 
        <h2>{{$key}} : {{$value}}</h2>

    @endforeach
@stop


@section("footer")
    <h1>I am the footer from main</h1>
@stop

<!-- migrations create new tables -->


















