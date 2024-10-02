@extends('layout.welcome')
@section('content')

<h3><a href="{{route('note.index')}}">BACK</a></h3>


<form method="POST" action=" {{route('note.store')}}">

    @csrf
    <label for="">Title: </label>
    <input type="text" name="title">

    <label for="">Description: </label>
    <input type="text" name="description">

    <input type="submit">

</form>
    
@endsection