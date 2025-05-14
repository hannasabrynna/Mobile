<x-layout>
    <h2 style="text-align: center; font-family: Arial, sans-serif;">Movies List</h2>

    @foreach ($movies as $movie)
        <div style="border: 1px solid #ccc; border-radius: 10px; padding: 15px; margin: 15px auto; max-width: 600px; background-color: #f9f9f9; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); ">
            <strong style="font-size: 18px; color: #333;">{{ $movie->title }}</strong> 
            <span style="color: #777;">({{ $movie->year }})</span><br>
            <span style="font-size: 14px; color: #555;">Director: {{ $movie->director ?? 'N/A' }}</span><br>
            <span style="font-size: 14px; color: #555;">Watched on: {{ $movie->watched_on ?? 'Not set' }}</span>

            <div style="margin-top: 10px; display: flex; gap: 10px;">
                <a href="{{ route('movies.edit', $movie) }}" style="padding: 5px 10px; background-color: #FFC107; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">Edit</a>

                <form action="{{ route('movies.destroy', $movie) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="padding: 5px 10px; background-color: #DC3545; color: white; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</x-layout>
