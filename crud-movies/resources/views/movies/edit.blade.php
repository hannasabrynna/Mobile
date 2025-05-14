<x-layout>
    <h2 style="text-align: center; font-family: Arial, sans-serif; color: #333;">Edit Movie</h2>

    <form method="POST" action="{{ route('movies.update', $movie) }}" style="max-width: 500px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background-color: #f9f9f9; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); color: #222831;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Title:</label>
            <input type="text" name="title" value="{{ old('title', $movie->title) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Year:</label>
            <input type="number" name="year" value="{{ old('year', $movie->year) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Director:</label>
            <input type="text" name="director" value="{{ old('director', $movie->director) }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="font-weight: bold; display: block; margin-bottom: 5px;">Watched On:</label>
            <input type="date" name="watched_on" value="{{ old('watched_on', $movie->watched_on) }}" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">
        </div>

        <button type="submit" style="display: block; width: 100%; padding: 10px; background-color: #077A7D; color: white; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer; transition: background-color 0.3s ease;">Update</button>
    </form>

    <a href="{{ route('movies.index') }}" style="display: inline-block; padding: 10px 20px; background-color: #077A7D; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin: 20px auto; text-align: center; display: block; width: fit-content;">Back to List</a>
</x-layout>