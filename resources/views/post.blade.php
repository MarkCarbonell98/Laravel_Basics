@extends("layout.app")

@section("content")
    <h1>This is the post blade {{$id}} {{$name}} {{$value}}</h1>
@stop

@section("footer")
    <script>
        alert("Hey bro, you loaded me a few seconds ago")
    </script>
    <h1>This is also the footer broooo</h1>
@stop