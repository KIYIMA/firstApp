@extends('navbar')

<h1>{{ $title }}</h1>

@section('content')
<ul>
    @forelse($users as $user)
        <li>{{ $user->name }}</li>
    @empty
        <li>No hay usuarios registrados.</li>
    @endforelse
</ul>

@section('sidebar')
    @parent
@endsection