@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Home</h1>
    <h2 class="text-xl font-semibold mb-4">Films</h2>
    <h1 class="text-2x1 font-bold mb-4">film</h1>
    <a href="{{ route('films.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">Add New Film</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Title</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Synopsis</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Poster</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Year</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($films as $film)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b border-gray-200">{{ $film->judul }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $film->sinopsis }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <img src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}" class="h-16 w-auto">
                        </td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $film->tahun }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">
                            <a href="{{ route('films.show', $film->id) }}" class="text-blue-500 hover:underline">View</a>
                            <a href="{{ route('films.edit', $film->id) }}" class="text-yellow-500 hover:underline ml-2">Edit</a>
                            <form action="{{ route('films.destroy', $film->id) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection