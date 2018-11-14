@extends('layouts.app')


@section('content')
    <h1>Content Page {{$id}}</h1>

    @if(count($people))
        <ul>
        
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
        </ul>
    @endif

@section('footer')
    <script>alert("Hello Visitor")</script>

@stop
