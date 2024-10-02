@extends('layout.welcome')

@section('content')

@forelse ($notes as $note)
    <ul>
        <li><a href="#">{{$note->title}}</a> / <a href="{{route('note.edit', $note->id)}}">Edit</a> 
            / <a href="{{route('note.show', $note->id)}}">show</a> 
            /<form method="POST" action="{{route('note.destroy', $note->id)}}" >
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE">
        </form>
        
        </li>   

    </ul>
    <p></p>
@empty

<h3>No hay notas</h3>
    
@endforelse

<h3><a href="{{route('note.create')}}">Create new note</a></h3>


    
@endsection