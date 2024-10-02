@extends('layout.welcome')

@section('content')

<h3><a href="{{route('note.index')}}">BACK</a></h3>


<form method="POST" action=" {{route('note.update', $note->id)}}">
    @method('PUT')
    @csrf
    <label for="">Title: </label>
    <input type="text" name="title" value="{{$note->title}}">

    <label for="">Description: </label>
    <input type="text" name="description" value="{{$note->description}}">

    <input type="submit">

</form>
    
@endsection