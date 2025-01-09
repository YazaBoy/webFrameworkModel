@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Film</h1>
    <form action="{{ route('films.update', $film->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="judul" class="block text-gray-700">Title</label>
            <input type="text" name="judul" id="judul" value="{{ $film->judul }}" class="w-full p-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="sinopsis" class="block text-gray-700">Synopsis</label>
            <textarea name="sinopsis" id="sinopsis" class="w-full p-2 border border-gray-300 rounded-lg" required>{{ $film->sinopsis }}</textarea>
        </div>
        <div class="mb-4">
            <label for="poster" class="block text-gray-700">Poster</label>
            <input type="file" name="poster" id="poster" class="w-full p-2 border border-gray-300 rounded-lg" onchange="previewImage(event)">
            @if($film->poster)
                <img id="poster-preview" src="{{ asset('storage/' . $film->poster) }}" alt="{{ $film->judul }}" class="h-16 w-auto mt-2">
            @else
                <img id="poster-preview" class="h-16 w-auto mt-2" style="display: none;">
            @endif
        </div>
        <div class="mb-4">
            <label for="tahun" class="block text-gray-700">Year</label>
            <input type="text" name="tahun" id="tahun" value="{{ $film->tahun }}" class="w-full p-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="genre_id" class="block text-gray-700">Genre</label>
            <select name="genre_id" id="genre_id" class="w-full p-2 border border-gray-300 rounded-lg" required>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $film->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Save</button>
        </div>
    </form>
    <a href="{{ route('films.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Back to List</a>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('poster-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection