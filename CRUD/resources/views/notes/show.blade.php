@extends('layout.welcome')

@section('content')
<h3><a href="{{route('note.index')}}">BACK</a></h3>
<ul>
    <li>{{$note->title}}</li>
    <li>{{$note->description}}</li>
</ul>

@endsection