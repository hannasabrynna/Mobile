<x-layout>
    <h2>Edit Movie</h2>

    <form method="POST" action="{{ route('movies.update', $movie) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Title:</label><br>
            <input type="text" name="title" value="{{ old('title', $movie->title) }}" required>
        </div>

        <div>
            <label>Year:</label><br>
            <input type="number" name="year" value="{{ old('year', $movie->year) }}" required>
        </div>

        <div>
            <label>Director:</label><br>
            <input type="text" name="director" value="{{ old('director', $movie->director) }}">
        </div>

        <div>
            <label>Watched On:</label><br>
            <input type="date" name="watched_on" value="{{ old('watched_on', $movie->watched_on) }}">
        </div>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('movies.index') }}">⬅ Back to List</a>
</x-layout>
