@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $film->judul }}</h1>
    <div class="mb-4">
        <img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}" class="h-64 w-auto mb-4">
        <p class="text-gray-700 mb-4"><strong>Synopsis:</strong> {{ $film->sinopsis }}</p>
        <p class="text-gray-700 mb-4"><strong>Year:</strong> {{ $film->tahun }}</p>
    </div>
    <a href="{{ route('films.edit', $film->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg">Edit</a>
    <form action="{{ route('films.destroy', $film->id) }}" method="POST" class="inline-block ml-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Delete</button>
    </form>
    <a href="{{ route('films.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg ml-2">Back to List</a>
</div>
@endsection