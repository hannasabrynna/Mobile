<x-layout>
    <a href="{{ route('movies.create') }}">➕ Add Movie</a>

    @foreach ($movies as $movie)
        <div class="movie">
            <strong>{{ $movie->title }}</strong> ({{ $movie->year }})<br>
            Director: {{ $movie->director ?? 'N/A' }}<br>
            Watched on: {{ $movie->watched_on ?? 'Not set' }}

            <div style="margin-top: 5px;">
                <a href="{{ route('movies.edit', $movie) }}">✏️ Edit</a>

                <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️ Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</x-layout>
